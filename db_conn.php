<?php 
if(isset($_SESSION)){
	$semester=$_SESSION['semester'];
	$db = mysqli_connect("localhost", "root", "");
	mysqli_select_db($db, $semester);
}else{
	session_start();

}
?>