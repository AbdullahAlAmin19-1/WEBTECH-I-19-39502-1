<!DOCTYPE html>
<html>  
<head>  
<title>Change Profile Picture</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head> 
<body>
 <?php 
session_start();
if (isset($_SESSION['name'])){ require 'Bar/top1.php';}
else {header("location:login.php");}
require 'Controller/pictureUpload.php';
?>

<div class="container-fluid">
  <div class="container">
<div class="div">
<fieldset class="b" style="border: 2px solid black; padding: 10px 10px;">
<legend>PROFILE PICTURE</legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
  <img class="proPic" 
  src="Uploads/<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "pic.png";}
  ?>" alt="Profile Picture"> 
  <input type="file" name="fileToUpload" id="fileToUpload">
  <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>
</div> 
</div>
</div>
<?php require 'Bar/footer.php';?>
</body>
</html>