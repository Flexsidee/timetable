<?php 
session_start();
include'../db_conn.php'; 
if(isset($_POST)){
    $ldid = $_POST['ldid'];
    $lecturer = $_POST['lecturer'];
    $duration = $_POST['duration'];

    mysqli_query($db, "update lecture_details set lecturer_id='$lecturer', duration='$duration' where LDID='$ldid'");
    header("location: ../edit_lecture_details.php");
    //echo mysqli_error($db);
}
if(isset($GET['id'])){
    $ldid=$_GET['id'];
    mysqli_query($db, "delete from lecture_details where LDID='$ldid'");
}
?>