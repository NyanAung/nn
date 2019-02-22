<?php  
session_start();

if (!isset($_SESSION['admin'])) {
	header("location: login.php");
}


$conn = mysqli_connect('localhost','root','','assignment');
?>
