<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
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

if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:Login.php");}

require 'Controller/showData.php';
require 'Controller/storeData.php';
?> 
<div class="container">
<div class="div">
<div class="b">
<legend>EDIT PROFILE</legend>                 
  <form name="form" method="post"> 
  <label for="name">Name :</label>
  <input type="text" id="name" name="name" value="<?php echo $name ?>" onkeyup="checkName()" onblur="checkName()" onclick="checkName()">
  <span class="error"  id="nameErr"> <?php echo $nameErr;?></span><hr>

  <p>ID             :   <?php echo $id ?></p><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email" value="<?php echo $email ?>" onkeyup="checkEmail()" onblur="checkEmail()" onclick="checkEmail()">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>

  <label for="mobile_number">Mobile Number :</label>
  <input type="tel" id="mobile_number" name="mobile_number" value="<?php echo $mobile_number ?>"  onkeyup="checkMoblieNumber()" onblur="checkMoblieNumber()" onclick="checkMoblieNumber()">
  <span class="error" id="mobile_numberErr"> <?php echo $mobile_numberErr;?></span><hr>

  <label for="address">Address :</label>
  <input type="text" id="address" name="address" value="<?php echo $address ?>"  onkeyup="checkAddress()" onblur="checkAddress()" onclick="checkAddress()">
  <span class="error" id="addressErr"> <?php echo $addressErr;?></span><hr>
  
  <p>Category       :   <?php echo $category ?></p><hr>

  <label for="gender">Shift :</label>
  <input type="radio" id="day" name="shift" value="Day (8AM - 4PM)"<?php if("Day (8AM - 4PM)" == $shift){echo "checked";}?>>
  <label for="day">Day</label>
  <input type="radio" id="night" name="shift" value="Night (4PM -12PM)"<?php if("Night (4PM -12PM)" == $shift){echo "checked";}?>>
    <label for="night">Night</label>
  <span class="error"> <?php echo $shiftErr;?></span><hr>

  <p>Gender         :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday:  <?php echo $dob ?></p>
  <hr>

<input type="submit" name="submit" value="Submit">
</form>  
</div>
</div>
</div>
<?php require 'Bar/footer.php';?>
</div> 
</body>  
</html>  