<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
    $dept_name = $_POST['name'];
    $dept_code = $_POST['code'];

    mysqli_query($db, "insert into department(department_name, dept_code) values('$dept_name', '$dept_code')");
    header("location: ../view_depts.php");
    #echo mysqli_error($db);
    
}
?>