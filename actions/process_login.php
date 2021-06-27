<?php 
session_start();
if(isset($_POST)){
    $semester = $_SESSION['semester'];//used in th db_conn file to select db to work with
    $username= $_POST['username'];
    $pword= $_POST['password'];
    include'../db_conn.php';
    $result=mysqli_query($db, "select * from user where username = '$username'");
    if(mysqli_num_rows($result)==1){
        $rec=mysqli_fetch_assoc($result);
        $dbpword=$rec['password'];
        if($pword === $dbpword){
            $_SESSION['username']=$rec['username'];
            $_SESSION['login'] =1;
            header("location: ../home.php");
            die();
        } else{
            header("location: ../index.php?err=Invalid Login Details");
            die();
        } 
    }else{
        header("location: ../index.php?err=User does not exist");
        die();
    } 
}
    
?>


