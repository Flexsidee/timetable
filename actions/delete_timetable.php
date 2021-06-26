<?php 
session_start();
if($_GET['del'] == 'yes'){
    include'../db_conn.php'; 
    mysqli_query($db, "update lecture_schedule set start_time=null, end_time=null, day=null");
    header("location: ../home.php?tt=clr");
    
}
?>