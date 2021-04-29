<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script src="JS/style.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
 <?php 

session_start();

if (isset($_SESSION['user_name'])){ require 'Bar/Top11.php';}
else{header("location:Login1.php");}

require 'Controller/ConfirmPasswordChange1.php';
 ?>

<div class="container div">
<div class="container-fluid">
<form method="post">
 <fieldset style="border: 2px solid black;padding: 20px 20px;width: 600px; margin: auto; margin-top: 60px; margin-bottom: 20px;">
  <h3><b>CHANGE PASSWORD</b></h3>
  <br>
  <label for="current_password">Current Password</label>
  <label style="margin-left: 32px;">: <input type="password" id="current_password" name="current_password" onkeyup="checkCurrentPassword()" onblur="checkCurrentPassword()"></label>
  <span id="current_passwordErr" class="error"> <?php echo $current_passwordErr;?></span>
  <br><br>

  <label for="new_password" style="color: green;">New Password</label>
  <label style="margin-left: 53px;">: <input type="password" id="new_password" name="new_password" onkeyup="checkNewPassword()" onblur="checkNewPassword()"></label>
  <span id="new_passwordErr" class="error"> <?php echo $new_passwordErr;?></span>
  <br><br>

  <label for="retype_new_password" style="color: red;">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password" onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()">
  <span id="retype_new_passwordErr" class="error"> <?php echo $retype_new_passwordErr;?></span>
  <br>

  <hr>

  <input type="submit" value="Submit">
<?php
echo $massage;
?>
 </fieldset>
</form>

</div>
</div>
<?php require 'Bar/Footer1.php';?>
</body>
</html>