<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{header("location:Login1.php");} 

require 'Controller/ShowData10.php';

?> 
<div class="container div">
<div class="container-fluid">
<fieldset style="border: 2px solid black;padding: 20px 20px;width: 500px; margin: auto; margin-top: 20px; margin-bottom: 80px;">

<h3><b>PROFILE</b></h3>
<div class="justLeft">
  <p><b>Name :</b>              <?php echo $name ?></p><hr>
  <p><b>User Name :</b>          <?php echo $user_name ?></p><hr>
  <p><b>ID :</b>                <?php echo $id ?></p><hr>
  <p><b>Email :</b>              <?php echo $email ?></p><hr>
  <p><b>Mobile Number :</b>     <?php echo $mobile ?></p><hr>
  <p><b>Address        :</b>   <?php echo $address ?></p><hr>
  <p><b>Shift          :</b>   <?php echo $shift ?></p><hr>
  <p><b>Gender         :</b>   <?php echo $gender ?></p><hr>
  <p><b>Date of Birthday :</b>  <?php echo $dob ?></p>
</div> 

<div class="justRight">
  <br><br><br><br>
  <img style="width: 200px; margin-top: 20px; margin-bottom: 20px;" src="Photos/<?php 
  if ($_SESSION['image']!=null){echo $_SESSION['image'];}
  else{echo "pp.png";}
  ?>" alt="Profile Picture"> 
  <div class="textCenter"> <a href="ChangeProfilePicture1.php">Change Profile Picture</a>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
<a class="justLeft" href="EditProfile1.php">Edit Profile</a>
<a class="justRight" href="ChangePassword1.php">Change Password</a>
</fieldset> 
</div>
</div>

<?php require 'Bar/Footer1.php';?>
</body>  
</html> 