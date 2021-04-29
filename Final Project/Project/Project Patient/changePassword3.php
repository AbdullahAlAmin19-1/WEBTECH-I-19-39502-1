<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS3/style.css">
<link rel="stylesheet" href="CSS3/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="JS3/style.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="container-fluid">
  <?php 
session_start();

if (isset($_SESSION['name'])){ require 'Bar3/top13.php';}
else{header("location:Login3.php");}

require 'Controller3/confirmPaswordChange3.php';
?>
<div class="container">
<div class="div">
<form method="post">
 <div class="b">
  <legend>CHANGE PASSWORD</legend>

  <label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password" onkeyup="checkCurrentPassword()" onblur="checkCurrentPassword()" >
  <span class="error" id="current_passwordErr"> <?php echo $current_passwordErr;?></span>
  <br><br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password" onkeyup="checkNewPassword()" onblur="checkNewPassword()" >
  <span class="error" id="new_passwordErr"> <?php echo $new_passwordErr;?></span>
  <br><br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password" onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()" >
  <span class="error" id="retype_new_passwordErr"> <?php echo $retype_new_passwordErr;?></span>
  <br><br>

  <hr>

  <input type="submit" value="Submit">

 </div>
</form>
</div>
<?php
echo $message;
?> 
</div>
<?php require 'Bar3/footer3.php';?>
</div>

</body>
</html>