<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
}
</style> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['user_name'])){require 'top1.php';}
else
{
  header("location:Welcome.php");
} 

$data = file_get_contents("Data.json");
$data = json_decode($data, true);
foreach($data as $row)  
{  
  $name = $row["name"];
  $email = $row["email"];
  $gender = $row["gender"];
  $dob = $row["dob"];
}
?> 
<div style="margin-left: 35%; margin-top: 10%;">
<fieldset class="grid-container," style="width: 500px">
<legend>PROFILE</legend>

<div style="float: left">
  <p>Name        :   <?php echo $name ?></p><hr>
  <p>Email        :   <?php echo $email ?></p><hr>
  <p>Gender        :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday      :   <?php echo $dob ?></p>
</div> 

<div style="float: right">
  <img style=" width: 85%" src="pic.png" alt="Profile Picture"> 
  <div style="text-align: center"> <a href="Change Profile Picture.php" >Change</a></div>


</div>

<br><br><br><br><br><br><br><br><br><br><br><hr>
<a href="Edit Profile.php">Edit Profile</a>
</fieldset> 


<?php require 'footer.php';?>
</body>  
</html> 