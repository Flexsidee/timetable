<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
    $course_code = $_POST['code'];
    $course_title = $_POST['title'];
    $course_unit = $_POST['unit'];
    $semester = $_POST['semester'];
    $dept = $_POST['dept'];
    $level = $_POST['level'];

    mysqli_query($db, "insert into course(course_code, course_title, course_unit, level_id, department_id, semester_id) values('$course_code', '$course_title', '$course_unit', '$semester', '$dept', '$level')");
    $pull_course = mysqli_fetch_assoc(mysqli_query($db, "select course_id from course where 1 order by course_id desc limit 1"));
    $course = $pull_course['course_id'];
    mysqli_query($db, "insert into lecture(course_id) values('$course')");
    $pull_lecture = mysqli_fetch_assoc(mysqli_query($db, "select lecture_id from lecture where 1 order by course_id desc limit 1"));
    $lecture = $pull_lecture['lecture_id'];
    mysqli_query($db, "update lecture set combined_id=$lecture where course_id=$course");
    header("location: ../view_course.php");
    //echo mysqli_error($db);
}
?>