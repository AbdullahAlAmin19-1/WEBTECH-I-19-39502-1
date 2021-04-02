<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>

<?php 
session_start();
if (isset($_SESSION['name'])){header("location:welcome.php");}
else{require 'Bar/top.php';}
require 'Controller/retrievePassword.php';
?>
<div class="container-fluid">
  <div class="container">
<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset class="b" style="border: 2px solid black; padding: 10px 10px;">
  <legend>Forgot Password</legend>

  <label for="email">Enter Email :</label>
  <input type="text" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <input type="submit" value="Submit">
 </fieldset>
</form> 

<?php 
echo $msg;?>
</div>
</div>
</div>
<?php require 'Bar/footer.php';?>
</body>
</html>