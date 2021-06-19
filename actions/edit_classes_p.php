<?php 
session_start();
include'../db_conn.php'; 
if(isset($_POST)){
    $class_id=$_POST['class_id'];
    $population=$_POST['population'];
    mysqli_query($db, "update class set population='$population' where class_id='$class_id'");
    header("location: ../edit_classes.php");
    //echo mysqli_error($db);
}
if(isset($_GET['id'])){
    $class_id=$_GET['id'];
    mysqli_query($db, "delete from class where class_id='$class_id'");
}
?>