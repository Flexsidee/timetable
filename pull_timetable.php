<?php 
    include'process_timetable_p.php';
    $tt=new timetable("where start_time is not null order by combined_population desc");

    include'db_conn.php'; 
    $resp=mysqli_query($db, "select * from vw_department_full where 1 order by class_id");
    $dept=array();
    while($row=mysqli_fetch_assoc($resp)){
        $dept[]=$row;
    }
$out['dept']=$dept;
$out['period']=$tt->lectures;

    echo json_encode($out);
?>