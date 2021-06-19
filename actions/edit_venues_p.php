<?php 
session_start();
include'../db_conn.php'; 
if(isset($_POST)){
    $venue_id= $_POST['venue_id'];
    $venue_name = $_POST['venue_name'];
    $capacity = $_POST['capacity'];
    $exclusive =$_POST['exclusive'];
  

    mysqli_query($db, "update venue set venue_name='$venue_name', capacity='$capacity', exclusive='$exclusive' where venue_id='$venue_id' ");
    header("location: ../edit_venue.php");
    #mysqli_error($db);
}
if(isset($_GET['id'])){
    $venue_id=$_GET['id'];
    mysqli_query($db, "delete from venue where venue_id='$venue_id'");
}

?>