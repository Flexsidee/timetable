<?php 

session_start();
$semester=$_SESSION['semester'];
include'db_conn.php';
$out['status']=1;
$combined_id=$_POST['data']['lecture']['combined_id'];
$venue_id=$_POST['data']['venue']['venue_id'];
mysqli_query($db, "insert into lecture_schedule(combine_id, venue_id) values('$combined_id', '$venue_id')");
echo json_encode($out);
?>