<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>  
<body>
<div class="container-fluid">
<?php 

session_start();

if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 
<div class="container">
<div class="div">
<div class="b" style="border: 2px solid black; padding: 10px 10px;">
<legend>PROFILE</legend>
<div class="row">
<div class="col-6">
  <p>Name           :   <?php echo $name ?></p><hr>
  <p>ID             :   <?php echo $id ?></p><hr>
  <p>Email          :   <?php echo $email ?></p><hr>
  <p>Mobile Number  :   <?php echo $mobile_number ?></p><hr>
  <p>Address        :   <?php echo $address ?></p><hr>
  <p>Category       :   <?php echo $category ?></p><hr>
  <p>Shift          :   <?php echo $shift ?></p><hr>
  <p>Gender         :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday:  <?php echo $dob ?></p>
</div> 

<div class="col-6">
  <img class="proPic" 
  src="Uploads/<?php 
  if ($image!=null){echo $image; $_SESSION['pic']=$image;} 
  else{echo "pic.png";}
  ?>" alt="Profile Picture"> 
  <div class="textCenter"> <a href="changeProfilePicture.php" >Change Profile Picture</a>
  </div>
</div>
</div>
<hr>
<a href="editProfile.php">Edit Profile</a>
<a href="changePassword.php">Change Password</a>
</div> 
</div>
</div>
<?php require 'Bar/footer.php';?>
</div>

</body>  
</html> 