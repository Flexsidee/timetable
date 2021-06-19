<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
    $combine = $_POST['combine'];
    $venue = $_POST['venue'];

    mysqli_query($db, "insert into lecture_schedule(combine_id, venue_id) values('$combine', '$venue')"); 
    mysqli_query($db, "insert into ls_without_time(combine_id, venue_id) values('$combine', '$venue')"); 
    header("location: ../assign_venue.php");
     // echo mysqli_error($db);
}
?>