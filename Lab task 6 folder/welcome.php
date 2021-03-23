<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{require 'Bar/top.php';}
 ?>
<div class="div">
<img class="p" src="Uploads/modern_medical.png" alt="Profile
		Picture">
</div>
<h1 class="welcome, div">Always ready to serve</h1>
<?php require 'Bar/footer.php';?>

</body>
</html>