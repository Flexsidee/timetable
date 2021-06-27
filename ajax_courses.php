<?php 
session_start();
$semester=$_SESSION['semester'];
$out = array();
    include'db_conn.php'; 
    $sql= mysqli_query($db, "select * from vw_full_course where department_id=".$_POST['department_id']." && level_id=".$_POST['level_id']);
    while($course= $sql -> fetch_assoc()){
      $out[]= $course;  
    }
    echo json_encode($out);
?>