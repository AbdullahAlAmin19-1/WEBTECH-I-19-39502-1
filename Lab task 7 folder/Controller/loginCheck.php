<?php
// $username="Abdullah Al Amin";
// $userpassword="@0123456789";

$nameErr = $passwordErr = $categoryErr = "";
$name = $password = $category = "";
if (isset($_POST['name']) && isset($_POST['category'])) 
{
  require 'Controller/checkloginData.php';
	if ($_POST['name']==$name && (password_verify($_POST['password'], $password)||$_POST['password']==$password) && $_POST['category']==$category) 
  {
		$_SESSION['name'] = $name;
    $_SESSION['category'] = $category;
    $_SESSION['id'] = $id;
    if(isset($_POST['remember_me']))
    {
    $time = time();
    setcookie('name', $name, $time+150);
    setcookie('password', $_POST['password'], $time+150);
    setcookie('category', $category, $time+150);
    }
    header("location:welcome.php");
	}
  else
  {
    $nameErr = "Name Invalid ";
    $passwordErr = "Password Invalid ";
    $categoryErr = "Category Invalid ";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["category"])) 
  {
    $categoryErr = "Category required";
  } 
  else if($_POST['category']!=$category) 
  {
    $categoryErr = "Category Invalid "; 
  }

  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name))
    {
      $nameErr = "Only letters, white space, period, dash allowed";
      $name="";
    }
    else if (str_word_count($name)<2 ) 
    {
      $nameErr = "Minimum two words";
      $name="";
    } 
    else if($_POST['name']!=$name) 
    {
      $nameErr = "name Invalid "; 
      $name="";
    }
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) < 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $password ="";
    } 
    else if($_POST['password']!=$password) 
    {
      $passwordErr = "password Invalid "; 
      $password ="";
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