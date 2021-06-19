<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
    $combined = $_POST['combined'];
    $lecturer = $_POST['lecturer'];
    $duration = $_POST['duration'];

   mysqli_query($db, "insert into lecture_details(comibined_id, lecturer_id, duration) values('$combined', '$lecturer', '$duration')");
    header("location: ../add_lecture_details.php");
    //echo mysqli_error($db);
}
?>