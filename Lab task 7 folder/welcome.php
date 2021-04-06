<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{require 'Bar/top.php';}
?>
  <div class="container">
<div class="div">
<img class="p" src="Uploads/modern_medical.png" alt="Profile
		Picture">
</div>
<h1 class="textCenter, div">Always ready to serve</h1>
</div>
<?php require 'Bar/footer.php';?>
</div>

</body>
</html>