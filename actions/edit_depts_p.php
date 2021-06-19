<?php
session_start();
if(isset($_POST)){
    include'../db_conn.php';
    $department_id=$_POST['department_id'];
    $department_name=$_POST['department_name'];
    $department_code=$_POST['dept_code'];
    mysqli_query($db, "update department set department_name='$department_name', dept_code='$department_code' where department_id='$department_id'");
    header("location: ../edit_depts.php");
    //echo mysqli_error($db);
}
if(isset($_GET['id'])){
    $department_id=$_GET['id'];
    mysqli_query($db, "delete from department where department_id='$department_id'");
}
?>