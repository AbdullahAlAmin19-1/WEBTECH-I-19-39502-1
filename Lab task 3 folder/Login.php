<!DOCTYPE html>
<html>
<head>
<title>LogeIn</title>
</head>
<body>
  
<style>
.error {color: #FF0000;}
</style>

<?php
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
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$user_name) || str_word_count($user_name)<2 )
    {
      $user_nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $user_name="";
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
      $passwordErr = "Must be atleast 8 character and at least one of the special characters";
      $password="";
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

<form method="post">
 <fieldset style="width: 400px">
  <legend>LOGIN</legend>

  <label for="user_name">User name :</label>
  <input type="text" id="user_name" name="user_name"value="<?php echo $user_name;?>">
  <span class="error"> <?php echo $user_nameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="text" id="password" name="password"value="<?php echo $password;?>">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me" value="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="">Forgot Password?</a>

 </fieldset>
</form>
</body>
</html>