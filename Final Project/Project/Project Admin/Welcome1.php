<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="CSS/style0.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>

<?php 
session_start();
if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{require 'Bar/Top10.php';}
 ?>
 <div class="container-fluid">
<h2 class="welcome, div">Welcome To Modern Medical</h2>
<div class="div">
<img class="p" src="Photos/Photo1.jpg" alt="Welcome Photo">
</div>
</div>

<?php require 'Bar/Footer1.php';?>

</body>
</html>