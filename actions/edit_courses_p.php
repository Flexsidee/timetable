<?php 
session_start();
include'../db_conn.php'; 
if(isset($_POST)){
    $course_id = $_POST['course_id'];
    $course_code = $_POST['course_code'];
    $course_title = $_POST['course_title'];
    $course_unit = $_POST['course_unit'];
    mysqli_query($db, "update course set course_code='$course_code', course_title='$course_title', course_unit='$course_unit' where course_id='$course_id'");
    header("location: ../edit_course.php");
    //echo mysqli_error($db);
}
if(isset($_GET)){
    $course_id=$_GET['id'];
    mysqli_query($db, "delete from course where course_id='$course_id'");
    mysqli_query($db, "delete from lecture where course_id='$course_id'");
}
?>