<?php 
session_start();
if(isset($_POST)){
	if($_POST['select_semester'] === 0){
		header('location: ../index.php?err=Select semester');
	}else{
		$semester = $_POST['select_semester'];
	    $db_name= $semester;
	    $_SESSION['semester'] = $db_name;
	    header('location: ../login.php');
	    //echo $semester;
	}
  
}
?>