<!DOCTYPE html>
<html>  
<head>  
<title>Change Profile Picture</title>
<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head> 
<body>
 <?php 
session_start();
if (isset($_SESSION['user_name'])){ require 'Bar/Top11.php';}
else {header("location:Login1.php");}
require 'Controller/PictureUpload1.php';
?>
<div class="container">
<div class="container-fluid">
<fieldset style="border: 2px solid black;padding: 20px 20px;width: 350px; margin: auto; margin-top: 40px; margin-bottom: 80px;">
<h3><b>PROFILE PROFILE</b></h3>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
  <img style="margin-left: 25px; margin-right: 25px; margin-top: 25px;height: 160px; width: 140px;" 
  src="Photos/<?php 
  if (isset($_SESSION['image'])){echo $_SESSION['image'];} 
  else{echo 'pp.png';}
  ?>" alt="Profile Picture"><br><br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>
</div>
</div>
<?php require 'Bar/Footer1.php';?>
</body>
</html>