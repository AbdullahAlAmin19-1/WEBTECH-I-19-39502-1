<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
</head>
<body>
<style>
.error {color: #FF0000;}
</style>

<?php 
session_start();
if (isset($_SESSION['user_name'])){header("location:Welcome.php");}
else
{
  require 'top.php';
}

$username="Al Amin";
$userpassword="@0123456789";

if (isset($_POST['user_name'])) {
	if ($_POST['user_name']==$username && $_POST['password']==$userpassword) {
		$_SESSION['user_name'] = $username;
		header("location:Welcome.php");
	}
	else{
	}
}
$user_nameErr = $passwordErr = "";
$user_name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["user_name"])) 
  {
    $user_nameErr = "Name is required";
  } 
  else 
  {
    $user_name = test_input($_POST["user_name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$user_name))
    {
      $user_nameErr = "Only letters, white space, period, dash allowed";
      $user_name="";
    }
    else if (str_word_count($user_name)<2 ) 
    {
      $user_nameErr = "Minimum two words";
      $user_name="";
    }
    else if($_POST['user_name']!=$username )
    {
      $user_nameErr="User Name invalid";
    }
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) <= 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (@, #, $,%)";
      $password ="";
    }
    else if($_POST['password']!=$userpassword)
    {
      $passwordErr="Password invalid";
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset style="width: 400px">
  <legend>LOGIN</legend>

  <label for="user_name">User name :</label>
  <input type="text" id="user_name" name="user_name">
  <span class="error"> <?php echo $user_nameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="Forgot Password.php">Forgot Password?</a>

 </fieldset>
</form> 
</div>	
<?php require 'footer.php';?>
</body>
</html>