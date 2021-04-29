<?php 

require_once 'Controller/UserInfoCheck1.php';
$patient = fetchData3($_GET['id']);

 ?>
 <!DOCTYPE html>
<html>  
<head>  
<title>Edit User</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="JS/style.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>  
<body>

<div class="container-fluid">
<?php 

session_start();

if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{header("location:Login1.php");}

require 'Controller/DataStore13.php';
?> 
<div class="container">
<div class="div">
<form style="margin-bottom: 80px;" action="Controller/UpdatePatient1.php" name="form" method="post" enctype="multipart/form-data"> 
<fieldset style="border: 2px solid black;padding: 20px 20px;">
  <h3>EDIT PROFILE</h3>
  <p><b><?php echo $patient['Category'] ?></b></p>
  <p><b>ID             -   <?php echo $patient['Id'] ?></b></p><hr>                 
  
  <label for="name"><b>Name :</b></label>
  <input type="text" id="name" name="name" value="<?php echo $patient['Name'] ?>" onkeyup="checkName()" onblur="checkName()">
  <span class="error"  id="nameErr"> <?php echo $nameErr;?></span><hr>

  <label for="email"><b>Email :</b></label>
  <input type="text" id="email" name="email" value="<?php echo $patient['Email'] ?>" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>
  
  <label for="address"><b>Address :</b></label>
  <input type="text" id="address" name="address" value="<?php echo $patient['Address'] ?>" onkeyup="checkAddress()" onblur="checkAddress()" >
  <span class="error" id="addressErr"> <?php echo $addressErr;?></span><hr>

  <label for="mobile_number"><b>Mobile Number :</b></label>
  <input type="tel" id="mobile" name="mobile_number" value="<?php echo $patient['Mobile Number'] ?>" onkeyup="checkMoblieNumber()" onblur="checkMoblieNumber()">
  <span class="error" id="mobileErr"> <?php echo $mobile_numberErr;?></span><hr>

  <p><b>Gender         -   <?php echo $patient['Gender'] ?></b></p><hr>
  <p><b>Date of Birthday -  <?php echo $patient['Date of Birth']?></b></p>
  <hr>
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<input type="submit" name="UpdatePatient1" value="Update">
<input type="reset"> 
</fieldset>
</form>
</div>
</div>
<?php require 'Bar/Footer1.php';?>
</div> 
</body>
</html>  