<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<link rel="stylesheet" href="CSS/style.css"> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:Login.php");}

require 'Controller/showData.php';
require 'Controller/storeData.php';
?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
  <form method="post"> 
  <label for=name">Name :</label>
  <input type="text" id="name" name="name" value="<?php echo $name ?>">
  <span class="error"> <?php echo $nameErr;?></span><hr>

  <p>ID             :   <?php echo $id ?></p><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email" value="<?php echo $email ?>">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="mobile_number">Mobile Number :</label>
  <input type="tel" id="mobile_number" name="mobile_number" value="<?php echo $mobile_number ?>">
  <span class="error"> <?php echo $mobile_numberErr;?></span><hr>

  <label for="address">Address :</label>
  <input type="text" id="address" name="address" value="<?php echo $address ?>">
  <span class="error"> <?php echo $addressErr;?></span><hr>
  
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
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  