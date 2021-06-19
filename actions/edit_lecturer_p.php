<?php 
session_start();
include'../db_conn.php'; 
if(isset($_POST)){
    $lecturer_id= $_POST['lecturer_id'];
    // $staff_id = $_POST['staff_id'];
    $sname = $_POST['sname'];
    $bank_name = $_POST['bank_name'];
    $acct_number = $_POST['acct_number'];
    // $fname = $_POST['fname'];
    // $oname = $_POST['oname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    // $address = $_POST['address'];
    // $gender = $_POST['gender'];

    mysqli_query($db, "update lecturer set surname='$sname', bank_name='$bank_name', acct_number='$acct_number', email='$email', tel='$tel' where lecturer_id='$lecturer_id' ");
    header("location: ../edit_lecturer.php");
    #mysqli_error($db);
}
if(isset($_GET['id'])){
    $lecturer_id=$_GET['id'];
    mysqli_query($db, "delete from lecturer where lecturer_id='$lecturer_id'");
}

?>