<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['user_name'])){ require 'top1.php';}
else
{
	require 'top.php';
}

 ?>
<h1 style="text-align: center;
  margin: 15% 0;">Welcome to our Company</h1>  	
<?php require 'footer.php';?>
</body>
</html>