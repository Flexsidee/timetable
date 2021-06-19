<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
    $topen = $_POST['topen'];
    $tclose = $_POST['tclose'];
    $total_hours = (strtotime($tclose) - strtotime($topen)) /3600;
    $total_days= count($_POST['days']);
    $days = implode(',', $_POST['days']);

    $res=mysqli_query($db, "insert into schol_open_details(time_open, time_close, days, total_days, total_hours) values('$topen', '$tclose', '$days', '$total_days', '$total_hours')");
    if($res){
        echo "<h1>School details added succesully, you will be reidirected to home button soon</h1>";
        header("refresh: 3; url=../home.php");
    }else{
        echo "<h1>Details unadded, go back and retry</h1>";
        header("refresh: 3; url=../add_school_details.php");
    }
    // echo mysqli_error($db);
    // echo "total days =".$total_days."  ".$total_hours;
}
?>