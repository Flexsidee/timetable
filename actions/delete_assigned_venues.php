<?php 
session_start();
if($_GET['del'] == 'yes'){
    include'../db_conn.php'; 
    mysqli_query($db, "truncate lecture_schedule");
    header("location: ../home.php?vns=clr");
    #echo mysqli_error($db);
    
}
?>