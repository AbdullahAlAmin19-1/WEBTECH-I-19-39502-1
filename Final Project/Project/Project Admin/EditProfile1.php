<!DOCTYPE html>  
<html>  
<head>  
<title>Edit Profile</title>
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
if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{header("location:Login1.php");}

require 'Controller/ShowData10.php';
require 'Controller/DataStore10.php';
?> 

<div class="container">
<div class="container-fluid">
<fieldset style="border: 2px solid black;padding: 20px 20px;width: 650px; margin: auto; margin-top: 20px; margin-bottom: 80px;">
<h3><b>EDIT PROFILE</b></h3>               
  <form name="form" method="post">
  <br>
  <label for="name"><b>Name</b></label>
  <label style="margin-left: 93px;">: <input id="name" type="text" name="name" size="30" value="<?php echo $name ?>" onkeyup="checkName()" onblur="checkName()"></input></label>
  <span id="nameErr" class="error"> <?php echo $nameErr;?></span><hr>

  <label for="user_name"><b>User Name</b></label>
  <label style="margin-left: 55px;">: <input id="user_name" type="text" name="user_name" size="30" value="<?php echo $user_name ?>" onkeyup="checkUserName()" onblur="checkUserName()"></input></label>
  <span id="user_nameErr" class="error"> <?php echo $user_nameErr;?></span><hr>

  <label for="email"><b>Email</b></label>
  <label style="margin-left: 96px;">: <input id="email" type="email" name="email" size="30" value="<?php echo $email ?>" onkeyup="checkEmail()" onblur="checkEmail()"></input><b> i </b></label>
  <span id="emailErr" class="error"> <?php echo $emailErr;?></span><hr>

  <label for="mobile"><b>Mobile Number</b></label>
  <label style="margin-left: 18px;">: <input id="mobile" type="tel" name="mobile" pattern="[0-9]{3}[0-9]{8}" size="30" value="<?php echo $mobile ?>" onkeyup="checkMoblieNumber()" onblur="checkMoblieNumber()"></label>
  <span id="mobileErr" class="error"> <?php echo $mobileErr;?></span><hr>

  <label for="address"><b>Address</b></label>
  <label style="margin-left: 76px;">: <input id="address" type="text" name="address" size="30" value="<?php echo $address ?>" onkeyup="checkAddress()" onblur="checkAddress()"></label>
  <span id="addressErr" class="error"> <?php echo $addressErr;?></span><hr>

  <label for="gender"><b>Shift</b></label>
  <label style="margin-left: 100px;">: <input type="radio" id="day" name="shift" value="Day (8AM - 4PM)"<?php if("Day (8AM - 4PM)" == $shift){echo "checked";}?>></label>
  <label for="day">Day</label>
  <input type="radio" id="night" name="shift" value="Night (4PM -12PM)"<?php if("Night (4PM -12PM)" == $shift){echo "checked";}?>>
    <label for="night">Night</label>
  <span class="error"> <?php echo $shiftErr;?></span><hr>

  <label for="gender"><b>Gender</b></label>
  <label style="margin-left: 80px;">: <input type="radio" id="male" name="gender" value="Male" <?php if("Male" == $gender){echo "checked";}?>></label>
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female" <?php if("Female" == $gender){echo "checked";} ?>>
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="Other" <?php if("Other" == $gender){echo "checked";} ?>>
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span>
  <hr>

  <label for="dob"><b>Date of Birthday</b></label>
  <label style="margin-left: 10px;">: <input type="date" id="dob" name="dob" value="<?php echo $dob ?>"></label>
  <span class="error"> <?php echo $dobErr;?></span>
  <hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>  
</fieldset>
</div>
</div>
<?php require 'Bar/Footer1.php';?>
</body>  
</html> 