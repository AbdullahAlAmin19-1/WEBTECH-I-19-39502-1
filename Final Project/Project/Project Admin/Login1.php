<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
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
    header("location:Welcome1.php");
  }
else
{
  require 'Bar/Top10.php';
}
require 'Controller/LoginCheck1.php';
?>

<div class="container div">
<div class="container-fluid">
<form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset style="border: 2px solid black;padding: 20px 20px; margin: auto;margin-top:70px; margin-bottom: 80px;width: 650px;">
  <h3 style="text-align: center;"><b>LOGIN</b></h3>
  <br>
  <label for="user_name">User Name</label>
  <label style="margin-left: 47px;">: <input id="name" type="text" name="user_name" size="30" value="<?php if(isset($_COOKIE['user_name'])){echo $_COOKIE['user_name'];} ?>" onkeyup="checkName()" onblur="checkName()"></input></label>
  <span id="nameErr" class="error"> <?php echo $user_nameErr;?></span>
  <br><br>

  <label for="password">Password</label>
  <label style="margin-left: 58px;">: <input id="password" type="password" name="password" size="30" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" onkeyup="checkPassword()" onblur="checkPassword()"></input></label>
  <span id="passwordErr" class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="rememberme" name="rememberme">
  <label for="rememberme">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="ForgotPassword1.php">Forgot Password?</a>

 </fieldset>
</form> 
</div>
</div>
</div>
<?php require 'Bar/Footer1.php';?>

</body>
</html>