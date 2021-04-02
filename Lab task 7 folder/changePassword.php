<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
 <?php 

session_start();

if (isset($_SESSION['name'])){ require 'Bar/top1.php';}
else{header("location:Login.php");}

require 'Controller/confirmPaswordChange.php';
 ?>


<div class="container-fluid">
  <div class="container">
<div class="div">
<form method="post">
 <fieldset class="b" style="border: 2px solid black; padding: 10px 10px;">
  <legend>CHANGE PASSWORD</legend>

  <label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password">
  <span class="error"> <?php echo $current_passwordErr;?></span>
  <br><br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password">
  <span class="error"> <?php echo $new_passwordErr;?></span>
  <br><br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password">
  <span class="error"> <?php echo $retype_new_passwordErr;?></span>
  <br><br>

  <hr>

  <input type="submit" value="Submit">

 </fieldset>
</form>
</div> 
</div>
</div>
<?php
echo $message;
?>
<?php require 'Bar/footer.php';?>
</body>
</html>