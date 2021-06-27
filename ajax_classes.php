<?php 
session_start();
$semester=$_SESSION['semester'];
$out = array();
    include'db_conn.php'; 
    $sql= mysqli_query($db, "select * from vw_lecture_schedule_full where level_id=".$_POST['level_id']." &&  venue_id is NULL ORDER BY `combined_population`  DESC");
    while($course= $sql -> fetch_assoc()){
        $lects=explode(',', $course['combined_list']);
        $view= " ";
        $combine=$course['combined_id'];  
        $population=$course['combined_population']; 
          foreach($lects as $val){
              $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
              $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
              $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); 
              $view.=$course['course_code'].'('.$dept['dept_code'].'), ';
          }
          $view= substr($view, 0, -2);
          $out[]= array('combine'=>$combine, 'view'=>$view, 'population'=>$population);  
    }
        
                                                        
    echo json_encode($out);
?>