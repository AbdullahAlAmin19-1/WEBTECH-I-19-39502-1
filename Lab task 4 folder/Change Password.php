<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
</head>
<body>
 <?php 

session_start();

if (isset($_SESSION['user_name'])){ require 'top1.php';}
else
  header("location:Login.php");
 ?>
<style>
.error {color: #FF0000;}
</style>

<?php
$current_password = $new_password = $retype_new_password = "";
$current_passwordErr = $new_passwordErr = $retype_new_passwordErr = "";
$pasword="@1234567890";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["current_password"])) 
  {
    $current_passwordErr = "Enter Current Password";
  } 
  else 
  {
    $current_password = test_input($_POST["current_password"]);
    if (strlen($current_password) <= 8)
    {
      $current_passwordErr = "Must be atlest 8 characters";
      $current_password="";
    }
    else if (!preg_match("/[@,#,$,%]/",$current_password)) 
    {
      $current_passwordErr = "Password must contain at least one of the special character (@, #, $,%)";
      $current_password="";
    }
    else if($current_password!=$pasword)
    {
      $current_passwordErr = "Password dosen't match";
      $current_password="";
    }
  }

  if (empty($_POST["new_password"])) 
  {
    $new_passwordErr = "Enter New Password";
  } 
  else 
  {
    $new_password = test_input($_POST["new_password"]);
    if (strlen($new_password) <= 8 )
    {
      $new_passwordErr = "Must be atlest 8 characters";
      $new_password="";
    }
    else if (!preg_match("/[@,#,$,%]/",$new_password)) 
    {
      $new_passwordErr = "Password must contain at least one of the special character (@, #, $,%)";
      $new_password ="";
    }
    else if($new_password==$current_password)
    {
      $new_passwordErr = "Can't set the same Password";
      $new_password="";
    }
  }

  if (empty($_POST["retype_new_password"])) 
  {
    $retype_new_passwordErr = "Retype New Password";
  } 
  else 
  {
    $retype_new_password = test_input($_POST["retype_new_password"]);
    if($retype_new_password!=$new_password)
    {
      $retype_new_passwordErr = "Password dosen't match";
      $retype_new_password="";
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div style="margin-left: 35%; margin-top: 10%;">
<form method="post">
 <fieldset style="width: 500px">
  <legend>CHANGE PASSWORD</legend>

  <label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password">
  <span class="error"> <?php echo $current_passwordErr;?></span>
  <br><br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password">
  <span class="error"> <?php echo $new_passwordErr;?></span>
  <br><br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password">
  <span class="error"> <?php echo $retype_new_passwordErr;?></span>
  <br><br>

  <hr>

  <input type="submit" value="Submit">

 </fieldset>
</form>
</div> 
<?php require 'footer.php';?>
</body>
</html>