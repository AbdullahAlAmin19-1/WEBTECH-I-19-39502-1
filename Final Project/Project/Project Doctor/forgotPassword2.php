<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS2/style2.css">
<link rel="stylesheet" href="CSS2/bootstrap2.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="JS2/style2.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){header("location:welcome2.php");}
else{require 'Bar2/top12.php';}
require 'Controller2/retrievePassword2.php';
?>
<div class="container">
<div class="div">
<form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <div class="b">
  <legend>Forgot Password</legend>

  <label for="email">Enter Email :</label>
  <input type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>

  <input type="submit" value="Submit">
 </div>
</form> 
<br>
<?php 
echo $msg;?>
</div>
</div>
<?php require 'Bar2/footer2.php';?>
</div>



</body>
</html>