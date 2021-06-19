<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
    $level = $_POST['level'];
    $dept = $_POST['dept'];
    $size = $_POST['size'];

    mysqli_query($db, "insert into class(department_id, level_id, population) values('$dept', '$level', '$size')");
    header("location: ../add_class.php");
    #echo mysqli_error($db);
}
?>