<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
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

    //This will be used if all the details needed are to be inputed
    // mysqli_query($db, "insert into lecturer(staff_id, address_id, surname, firstname, othername, email, tel, gender) values('$staff_id', '$address', '$sname', '$fname', '$oname', '$email', '$tel', '$gender')");
    mysqli_query($db, "insert into lecturer(surname, bank_name, acct_number, email, tel) values('$sname', '$bank_name', '$acct_number', '$email', '$tel')");
    header("location: ../add_lecturer.php");
    #echo mysqli_error($db);
    }
?>