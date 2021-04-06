<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
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
<div class="b">
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