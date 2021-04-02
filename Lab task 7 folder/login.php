<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name'])){header("location:welcome.php");}
else{require 'Bar/top.php';}
require 'controller/loginCheck.php';
?>
<div class="container-fluid">
  <div class="container">
<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset class="b" style="border: 2px solid black; padding: 10px 10px;">
  <legend>LOGIN</legend>

  <fieldset class="b" style="border: 2px solid black; padding: 10px 10px;">
  <legend> Category</legend> 
  <input type="radio" id="doctor" name="category" value="Doctor"<?php if(isset($_COOKIE['category']) && $_COOKIE['category']=="Doctor"){echo "checked";} ?>>
  <label for="doctor">Doctor</label>
  <input type="radio" id="patient" name="category" value="Patient"<?php if(isset($_COOKIE['category']) && $_COOKIE['category']=="Patient"){echo "checked";} ?>>
  <label for="patient">Patient</label> 
  <input type="radio" id="receptionist" name="category" value="Receptionist"<?php if(isset($_COOKIE['category']) && $_COOKIE['category']=="Receptionist"){echo "checked";} ?>>
  <label for="receptionist">Receptionist </label>  
  <span class="error"> <?php echo $categoryErr;?></span>
 </fieldset><br>

  <label for="name">User name :</label>
  <input type="text" id="name" name="name" value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];} ?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>">
  <span class="error"> <?php echo $passwordErr;?></span>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="forgotPassword.php">Forgot Password?</a>

 </fieldset>
</form> 
</div>
</div>
</div>
<?php require 'Bar/footer.php';?>

</body>
</html>