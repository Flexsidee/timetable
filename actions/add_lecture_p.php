<?php 
session_start();
$out= array();
$out["status"] = 0;
include'../db_conn.php'; 
if(isset($_POST)){
    $cid=$_POST['data'][0]['course_id'];
    foreach ($_POST['data'] as $value) {
        mysqli_query($db, "update lecture set combined_id = ".time()." where course_id=".$value['course_id']);
        //var_dump($value);
        //header("location: ../view_lectures.php");
        $out["status"] = 1;
    }
}
echo json_encode($out);
//echo json_encode($_POST['data']);
//var_dump($_POST);
?>