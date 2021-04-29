<?php 
$emailErr = "";
$email = $massage ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  require 'Controller/EmailCheck1.php';
  if (!empty($_POST["email"]) && $_POST['email']==$email) 
  {
    $massage ="<h2>We are sending you an recovery Email</h2>";
  }
  else if (empty($_POST["email"])) 
  {
    $emailErr = "*Enter Email";
  }
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "*Invalid Email Format";
      $email="";
    }
    else
    {
      $emailErr ="*Invalid Email";
      $email=""; 
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