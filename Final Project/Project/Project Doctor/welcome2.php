<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS2/style2.css">
<link rel="stylesheet" href="CSS2/bootstrap22.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="JS2/style2.js"></script>


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar2/top22.php';}
else{require 'Bar2/top12.php';}
?>
<!-- <div class="container">
<div class="float-right">
<a class="nav-link" href="searchIndividual.php">
<?php
if (isset($_SESSION['name'])) 
{
	echo "Search Patient Info";
}
?></a>
</div> -->
<!-- <div class="float-left">
<a class="nav-link" href="searchIndividual.php">
<?php
if (isset($_SESSION['name'])) 
{
	echo "";
}
?></a>
</div> -->
<div class="textCenter">
<img class="p" src="Uploads2/modern_medical.png" alt="Profile
		Picture" style="width:600px;height:500px;">
<h1>Always ready to serve</h1>
</div>

</div>
<?php require 'Bar2/footer2.php';?>
</div>

</body>
</html>