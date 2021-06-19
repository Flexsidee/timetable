<?php
session_start();
include'../db_conn.php';
if(isset($_POST)){
    $combined_id=$_POST['combined_id'];
    $course_id=$_POST['course_id'];
    //$course_code=$_POST['course_code'];
    //$dept_code=$_POST['dept_code'];
    mysqli_query($db, "update lecture set combined_id='$course_id' where  course_id='$course_id' && combined_id='$combined_id'");
    header("location: ../edit_lectures.php");
    #echo mysqli_error($db);
   # echo $combined_id."course_id = ".$course_id."   course_code= ".$course_code."   dept=  ".$dept_code;
}
?>