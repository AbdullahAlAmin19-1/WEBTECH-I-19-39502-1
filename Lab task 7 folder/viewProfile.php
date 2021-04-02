<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 
<div class="container-fluid">
  <div class="container">
<div class="div">
<fieldset class="b" style="border: 2px solid black; padding: 10px 10px;">
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
</fieldset> 
</div></div>

<?php require 'Bar/footer.php';?>
</body>  
</html> 