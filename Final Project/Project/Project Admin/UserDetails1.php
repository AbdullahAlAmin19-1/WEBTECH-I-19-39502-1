<!DOCTYPE html>
<html>
<head>
<title>User Information</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script src="JS/style1.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['user_name']))
{
	require 'Bar/Top11.php';
}
else
{
	header("location:Login1.php");
}
 ?>

<div class="container">
<div>
<h2>Current User Details</h2><br>
<div>
<ul style="list-style-type:circle;">
  <li><a href="AdminInfo1.php">Admin Information</a></li><br>
  <li><a href="EymployeeInfo1.php">Eymployee Information</a></li><br>
  <li><a href="DocInfo1.php">Doctor Information</a></li><br>
  <li><a href="PatientInfo1.php">Patient Information</a></li>
</ul>
</div>
</div>
<br><br>
<?php require 'Bar/Footer1.php';?>

</body>
</html>