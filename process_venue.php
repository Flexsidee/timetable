<?php
include'process_timetable_p.php';
$tt=new timetable();
$tt->cap_expansion=$_POST['cap_expansion'];
$tt->assign_all_venues();
echo json_encode($tt->lecture_venues);
//var_dump($tt->lecture_venues);
?>