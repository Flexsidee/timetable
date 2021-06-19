<?php 
session_start();
if(isset($_POST)){
    include'../db_conn.php'; 
    $venue_name = $_POST['name'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $general = $_POST['exclusive'];
    $area = $length * $width;
    $capacity =$area/0.6715;
    // $b = 1.63279063786575 * $a;
    // $capacity=$b - 67.8901641134762;

    mysqli_query($db, "insert into venue(venue_name, length, width, area, capacity, exclusive) values('$venue_name', '$length', '$width', '$area', '$capacity', '$general')");
    header("location: ../view_venue.php");
    #echo mysqli_error($db);
}
?>