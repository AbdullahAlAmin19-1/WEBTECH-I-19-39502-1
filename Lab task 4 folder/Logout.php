<?php 

session_start();

if (isset($_SESSION['user_name'])) {
	session_destroy();
	header("location:Login.php");
	
}

else{
	header("location:Login.php");
}

 ?>