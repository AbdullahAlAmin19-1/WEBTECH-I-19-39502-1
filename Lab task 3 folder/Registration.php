<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title> 
</head>  
<body>
<style>
.error {color: #FF0000;}
</style>

<?php
$name = $email = $user_name = $password = $confirm_password = $gender = $dob = '';
$nameErr = $emailErr = $user_nameErr = $passwordErr = $confirm_passwordErr = $genderErr = $dobErr = '';
$message = '';  
$error = '';  
if(isset($_POST["submit"]))  
{  
  if(empty($_POST["name"]))  
  {  
    $nameErr = "Enter Name";  
  }

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";
    }
  }

  if(empty($_POST["user_name"]))  
  {  
    $user_nameErr = "Enter User Name";  
  } 


  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    if (strlen($password) <= 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
    }
  }

  if (empty($_POST["confirm_password"])) 
  {
    $confirm_passwordErr = "Password is required";
  } 
  else 
  {
    if (strlen($confirm_password) <= 8 )
    {
      $confirm_passwordErr = "Must be atlest 8 characters";
      $confirm_password="";
    }
    if($confirm_password!=$password)
    {
      $confirm_passwordErr = "Password dosen't match";
      $confirm_password="";
    }
  }

  if(empty($_POST["gender"]))  
  {  
    $genderErr = "Enter Gender";  
  } 

  if(empty($_POST["dob"]))  
  {  
    $dobErr = "Enter Date of Birth";  
  }

  if(file_exists('data.json'))  
  {  
    $current_data = file_get_contents('Data.json');  
    $array_data = json_decode($current_data, true);  
    $extra = array(  
    'name'            =>     $_POST['name'],
    'email'           =>     $_POST['email'],
    'user_name'       =>     $_POST['user_name'],
    'password'        =>     $_POST['password'],
    'confirm_password'=>     $_POST['confirm_password'],  
    'gender'          =>     $_POST["gender"],  
    'dob'             =>     $_POST["dob"]  
    );  
    $array_data[] = $extra;  
    $final_data = json_encode($array_data);  
    if(file_put_contents('data.json', $final_data))  
    {  
      $message = "File Appended Success fully";  
    }  
    else  
    {  
      $error = 'JSON File not exits';  
    }  
  }    
}  
?> 

<fieldset style="width: 400px">
<legend>REGISTRATION</legend>                 
  <form method="post"> 
  <label for=name">Name :</label>
  <input type="text" id="name" name="name"value="<?php echo $name;?>"><span class="error"> <?php echo $nameErr;?></span><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email"value="<?php echo $email;?>"><span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="user_name">User name :</label>
  <input type="text" id="user_name" name="user_name"value="<?php echo $user_name;?>"><span class="error"> <?php echo $user_nameErr;?></span><hr>

  <label for="password">Password :</label>
  <input type="text" id="password" name="password"value="<?php echo $password;?>"><span class="error"> <?php echo $passwordErr;?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="text" id="confirm_password" name="confirm_password"value="<?php echo $confirm_password;?>"><span class="error"> <?php echo $confirm_passwordErr;?></span><hr>

<fieldset style="width: 370px">
<legend> Gender</legend>
  <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
  <label for="female">Female</label> 
  <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
  <label for="male">Male</label> 
  <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span>
 </fieldset><hr>

<fieldset style="width: 370px">
  <legend>Date of Birthday</legend>
  <input type="date" name="birthday" value="<?php echo $dob;?>"><span class="error"> <?php echo $dobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>  
</fieldset>
</body>  
</html>  