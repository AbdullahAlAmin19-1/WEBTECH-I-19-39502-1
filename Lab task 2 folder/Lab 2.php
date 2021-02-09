<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  

<style>
.error {color: #FF0000;}
</style>
<!-- startsWith("abcde","c")
$word=explor(" ", $name) -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr = $blood_groupErr = "";
$name = $email = $gender = $birthday = $blood_group = $count = "";
$degree = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' .]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $name="";
    }
  }

  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";
    }
  }
    

  if (empty($_POST["birthday"])) 
  {
    $dobErr = "Date of Birth is required";
  } 
  else 
  {
    $birthday = test_input($_POST["birthday"]);
  }


  if (empty($_POST["gender"])) 
  {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
  }


  if (empty($_POST["degree"]) ) 
  {
    $degreeErr = "Degree is required";
  } 
  else 
  {
  	foreach($_POST['degree'] as $selected_degree)
	{
		$count++;
	}
  	if ($count<2)
  	{
  		$degreeErr = "Must mark atleast two Degrees";
  	}
  	
  }
  	

    if (empty($_POST["blood_group"])) 
  {
    $blood_groupErr = "Blood_Group is required";
  } 
  else 
  {
    $blood_group = test_input($_POST["blood_group"]);
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

<h2>Form </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Date of Birthday: <input type="date" name="birthday">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Degree:
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc
  <span class="error">* <?php echo $degreeErr;?></span>


  <br><br>

  Blood Group:
  <select name="blood_group">
  <option></option>
  <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="a+") echo "checked";?> value="a+">A+</option>
  <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="a-") echo "checked";?> value="a-">A-</option>
  <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="b+") echo "checked";?> value="b+">B+</option>
  <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="b-") echo "checked";?> value="b-">B-</option>
  <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="o+") echo "checked";?> value="o+">O+</option>
  <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="o-") echo "checked";?> value="o-">O-</option>
   <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="ab+") echo "checked";?> value="ab+">AB+</option>
  <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="ab-") echo "checked";?> value="ab-">AB-</option>
  </select>
  <span class="error">* <?php echo $blood_groupErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $birthday;
echo "<br>";
echo $gender;
echo "<br>";
foreach($_POST['degree'] as $selected_degree)
	{
		if($count>1)
		{
			echo $selected_degree. " ";
		}
	}
echo "<br>";
echo $blood_group;
?>

</body>
</html>