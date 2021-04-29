<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>

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
require 'Controller/DataStore10.php';
?>

<div class="container div">
<div class="container-fluid">
<fieldset style="border: 2px solid black;padding: 20px 20px;width: 680px; margin: auto; margin-top: 20px; margin-bottom: 80px;">
<h3 style="text-align: center;"><b>REGISTRATION</b></h3><br>             
  <form name="form" method="POST"> 
  <label for="name"><b>Name</b></label>
  <label style="margin-left: 91px;">: <input id="name" type="text" name="name" size="30" onkeyup="checkName()" onblur="checkName()"></input></label>
  <span id="nameErr" class="error"> <?php echo $nameErr;?></span><hr>

  <label for="user_name"><b>User Name</b></label>
  <label style="margin-left: 53px;">: <input id="user_name" type="text" name="user_name" size="30" onkeyup="checkUserName()" onblur="checkUserName()"></input></label>
  <span id="user_nameErr" class="error"> <?php echo $user_nameErr;?></span><hr>

  <label for="email"><b>Email</b></label>
  <label style="margin-left: 95px;">: <input id="email" type="email" name="email" size="30" name="email" onkeyup="checkEmail()" onblur="checkEmail()"></input><b> i </b></label>
  <span id="emailErr" class="error"> <?php echo $emailErr;?></span><hr>

  <label for="mobile"><b>Mobile Number</b></label>
  <label style="margin-left: 18px;">: <input id="mobile" type="tel" name="mobile" pattern="[0-9]{3}[0-9]{8}" size="30" onkeyup="checkMoblieNumber()" onblur="checkMoblieNumber()"></label>
  <span id="mobileErr" class="error"> <?php echo $mobileErr;?></span><hr>

  <label for="address"><b>Address</b></label>
  <label style="margin-left: 77px;">: <input id="address" type="text" id="address" name="address" size="30" onkeyup="checkAddress()" onblur="checkAddress()"></label>
  <span id="addressErr" class="error"> <?php echo $addressErr;?></span><hr>

  <label for="password"><b>Password</b></label>
  <label style="margin-left: 66px;">: <input id="password" type="password" name="password" size="30" onkeyup="checkPassword()" onblur="checkPassword()"></input></label>
  <span id="passwordErr" class="error"> <?php echo $passwordErr;?></span><hr>

  <label for="confirm_password"><b>Confirm Password</b></label>
  <label">: <input id="confirm_password" type="password" name="confirm_password" size="30" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()"></input></label>
  <span id="confirm_passwordErr" class="error"> <?php echo $confirm_passwordErr;?></span><hr>

<fieldset style="border: 1px solid black;padding: 20px 20px;width: 600px">
  <h5><b>Shift</b></h5>
  <input type="radio" id="day" name="shift" value="Day (8AM - 4PM)">
  <label for="day">Day</label>
  <input type="radio" id="night" name="shift" value="Night (4PM -12PM)">
    <label for="night">Night</label>
  <span class="error"> <?php echo $shiftErr;?></span>
</fieldset><hr>

<fieldset style="border: 1px solid black;padding: 20px 20px;width: 600px">
<h5><b>Gender</b></h5>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label> 
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span>
 </fieldset><hr>

<fieldset style="border: 1px solid black;padding: 20px 20px;width: 600px">
  <h5><b>Date of Birthday</b></h5>
  <input type="date" name="dob" id="dob" onkeyup="checkdob()" onblur="checkdob()"> <i>(mm/dd/yyyy)</i>
  <span id="dobErr" class="error"> <?php echo $dobErr;?></span>
</fieldset><hr>

<input type="checkbox" name="adminreq">
<label>Register As Admin </label>
<span class="error"> <?php echo $adminreqErr;?></span><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>  
</fieldset>
</div>
</div>
<?php require 'Bar/Footer1.php';?>
</body>  
</html> 