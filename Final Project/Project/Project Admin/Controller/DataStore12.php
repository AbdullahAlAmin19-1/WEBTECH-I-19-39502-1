<?php

if (isset($_SESSION['user_name'])){}
else
  {  $name = $email = $mobile_number = $shift = $address = $password = $confirm_password = $gender = $category = $dob = $encrypted_password = '';}

$nameErr = $emailErr = $mobile_numberErr = $shiftErr =$addressErr = $passwordErr = $confirm_passwordErr = $genderErr = $categoryErr = $dobErr = '';
$flag=1;
$update="on";  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name Required";
    $flag=0;
    $update="off"; 
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $name="";
      $flag=0;
      $update="off";
    }
  }

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid Email Format";
      $email="";    
      $flag=0;
      $update="off";
    }
  }


  if (empty($_POST["mobile_number"])) 
  {
    $mobile_numberErr = "Mobile Number Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $mobile_number = test_input($_POST["mobile_number"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['mobile_number']))
    {
      $mobile_numberErr = "Invalid Number";
      $mobile_number="";
      $flag=0;
      $update="off";
    }
  }

  if (empty($_POST["shift"])) 
  {
    $shiftErr = "Shift Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $shift = test_input($_POST["shift"]);
  }

  if (empty($_POST["address"])) 
  {
    $addressErr = "Address Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $address = test_input($_POST["address"]);
  }    
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>