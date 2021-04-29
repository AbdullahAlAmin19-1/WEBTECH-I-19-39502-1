<!DOCTYPE html>  
<html>  
<head>  
<title>Add User</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- <script src="JS/name_password.js"></script>
<script src="JS/email.js"></script>
<script src="JS/registration.js"></script> -->
<script src="JS/style.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>  
<body>

<div class="container-fluid">
<?php 

session_start();

if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{ header("location:Login1.php");}
require 'Controller/DataStore111.php';
?>
  <div class="container">
<div class="div">
<fieldset style="border: 2px solid black;padding: 20px 20px;margin-bottom: 75px;">
  <h3>Add User</h3>                 
  <form name="form" method="post"> 
  <label for="name"><b>Name</b></label>
  <label style="margin-left: 91px;">: <input id="name" type="text" name="name" size="30" onkeyup="checkName()" onblur="checkName()"></input></label>
  <span id="nameErr" class="error"> <?php echo $nameErr;?></span><hr>

  <label for="email"><b>Email</b></label>
  <label style="margin-left: 95px;">: <input id="email" type="email" name="email" size="30" name="email" onkeyup="checkEmail()" onblur="checkEmail()"></input><b> i </b></label>
  <span id="emailErr" class="error"> <?php echo $emailErr;?></span><hr>

  <label for="mobile_number"><b>Mobile Number</b></label>
  <label style="margin-left: 18px;">: <input id="mobile_number" type="tel" name="mobile_number" pattern="[0-9]{3}[0-9]{8}" size="30" onkeyup="checkMoblieNumber1()" onblur="checkMoblieNumber1()"></label>
  <span id="mobile_numberErr" class="error"> <?php echo $mobile_numberErr;?></span><hr>

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
    <input type="radio" id="none" name="shift" value="none">
    <label for="none">None</label>
  <span class="error"> <?php echo $shiftErr;?></span>
 </fieldset><hr>

<fieldset style="border: 1px solid black;padding: 20px 20px;width: 600px">
  <h5><b>Category</b></h5>
  <input type="radio" id="doctor" name="category" value="Doctor">
  <label for="doctor">Doctor</label>
  <input type="radio" id="patient" name="category" value="Patient">
  <label for="patient">Patient</label> 
  <input type="radio" id="receptionist" name="category" value="Receptionist">
  <label for="receptionist">Receptionist </label>  
  <span class="error"> <?php echo $categoryErr;?></span>
</fieldset><hr>

<fieldset style="border: 1px solid black;padding: 20px 20px;width: 600px">
<h5><b>Gender</b></h5>  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span>
</fieldset><hr>

<fieldset style="border: 1px solid black;padding: 20px 20px;width: 600px">
  <h5><b>Date of Birthday</b></h5>
  <input type="date" name="dob" id="dob" onkeyup="checkdob()" onblur="checkdob()"> 
  <span class="error" id="dobErr"> <?php echo $dobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>
</fieldset>
</div>
</div>
<?php require 'Bar/Footer1.php';?>
</div>
</body>  
</html>  