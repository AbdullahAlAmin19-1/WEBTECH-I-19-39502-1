<?php

require_once 'Model/model1.php';

if (isset($_SESSION['user_name'])){}
else
  {
    $name = $email = $mobile = $user_name = $address = $password = $confirm_password = $shift = $adminreq = $gender = $dob = $encrypted_password = '';}
    $nameErr = $emailErr = $mobileErr = $user_nameErr = $addressErr = $passwordErr = $confirm_passwordErr = $shiftErr = $adminreqErr = $genderErr = $dobErr = '';

    $flag=1; 
    $update="on";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {  
      if (empty($_POST["name"])) 
      {
        $nameErr = "*Insert Name";
        $flag=0;
        $update="off";
      } 
      else 
      {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<2 )
        {
          $nameErr = "*Invalid Input";
          $name="";
          $flag=0;
          $update="off";
        }
      }

      if (empty($_POST["email"])) 
      {
        $emailErr = "*Input Email";
        $flag=0;
        $update="off";
      }
      else 
      {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
          $emailErr = "*Invalid Email Format";
          $email="";    
          $flag=0;
          $update="off";
        }
      }
      if(empty($_POST["user_name"]))  
  {  
    $user_nameErr = "*Insert Username";
    $flag=0;
    $update="off";  
  } 
  else 
  {
    $user_name = test_input($_POST["user_name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$user_name) || str_word_count($user_name)<2 )
    {
      $user_nameErr = "*Invalid Input";
      $user_name="";
      $flag=0;
      $update="off";
    }
  }

      if (empty($_POST["mobile"]))
        {
          $mobileErr = "*Enter Mobile Number";
          $flag=0;
          $update="off";
        } 
        else 
        {
          $mobile = test_input($_POST["mobile"]);
          if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['mobile']))
          {
            $mobileErr = "*Invalid Number";
            $mobile="";
            $flag=0;
            $update="off";
          }
        }

        if (empty($_POST["address"])) 
          {
            $addressErr = "*Enter Address";
            $flag=0;
            $update="off";
          }
          else 
            {
              $address = test_input($_POST["address"]);
            }
        

  if (empty($_POST["password"])) 
  {
    $passwordErr = "*Insert Password";
    $flag=0;
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) <= 8)
    {
      $passwordErr = "*Minimum 8 Characters";
      $password="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) 
    {
      $passwordErr = "*Minimum One Special Character";
      $password ="";
      $flag=0;
    }
  }

  if (empty($_POST["confirm_password"])) 
  {
    $confirm_passwordErr = "*Retype The Password";
    $flag=0;
  } 
  else 
  {
    $confirm_password = test_input($_POST["confirm_password"]);
    if($confirm_password!=$password)
    {
      $confirm_passwordErr = "*Password Dosen't Match";
      $confirm_password="";
      $flag=0;
    }
  }

 if (empty($_POST["shift"]))
        {
          $shiftErr = "*Shift Required";
          $flag=0;
          $update="off";
        } 
        else 
        {
          $shift = test_input($_POST["shift"]);
        }

  if(empty($_POST["adminreq"]))  
  {  
    $adminreqErr = "*Select The Checkbox"; 
    $flag=0; 
  }
  else 
  {
    $adminreq = test_input($_POST["adminreq"]);
  } 

  if(empty($_POST["gender"]))  
  {  
    $genderErr = "*Select Gender"; 
    $flag=0; 
  }
  else 
  {
    $gender = test_input($_POST["gender"]);
  } 

  if(empty($_POST["dob"]))  
  {  
    $dobErr = "*Enter Date of Birth";
    $flag=0;  
  }
  else 
  {
    $dob = test_input($_POST["dob"]);
    if (time() < strtotime('+18 years', strtotime($dob))) 
    {
      $dobErr = '*Minimum 18 Years';
      $flag=0;  
    }
  }

  if ($flag==1) 
  {
    if(isset($_POST["submit"]))  
    {
      $encrypted_password = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
      if(addData($encrypted_password))
      {
        echo 'Registration Completed';
      }
    }  
  }
  if($update=="on")
  {
    if(isset($_POST["submit"]) && isset($_SESSION['user_name']))
    {
      $data['name'] = $_POST['name'];
      $data['user_name'] = $_POST['user_name'];
      $data['email'] = $_POST['email'];
      $data['mobile'] = $_POST['mobile'];
      $data['address'] = $_POST['address'];
      $data['shift'] = $_POST['shift'];

      if (updateData($_SESSION['id'], $data)) 
      {
        echo 'Successfully Updated';
      }
    }
  }   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>
