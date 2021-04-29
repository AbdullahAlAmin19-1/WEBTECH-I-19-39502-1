<!DOCTYPE html>
<html>
<head>
<title>Patient Payment</title>
<link rel="stylesheet" href="CSS3/style.css">
<link rel="stylesheet" href="CSS3/bootstrap.css"> 
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar3/top13.php';}
else{header("location:login3.php");} 
?>
<h1 class="textCenter">Patient Payment</h1><br><br>
<div class="div">
<div class="container">
<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset class="loginFildset"style="width: 400px;border: 2px solid black; padding: 10px 10px;margin-bottom: 40px;">
 <legend>Patient Payment</legend>

 <label for="prescribe date">Prescribe Date:</label>
  <input type="date" id="prescribe date" name="prescribe date">
  <br><br>

 <label for="patient name">Patient Name:</label>
  <input type="text" id="patient name" name="patient name" value="<?php echo $_SESSION['name']; ?>">
  <br><br>

  <label for="patient id">Patient Id:</label>
  <input type="number" id="patient id" name="patient id"value="567898">
  <br><br>


  <label for="doctor name">Doctor Name:</label>
  <input type="text" id="doctor name" name="doctor name">
  <br><br>

  <label for="doctor id">Doctor Id:</label>
  <input type="number" id="doctor id" name="doctor id" > 
  <br><br>

  <label for="appointment serial">Appointment Serial:</label>
  <input type="number" id="appointment serial" name="appointment serial" > 
  <br><br>

  <label for="doctor fee">Doctor Fee:</label>
  <input type="number" id="doctor fee" name="doctor fee" > 
  <br><br>

  <label for="payment date">Payment Date:</label>
  <input type="date" id="payment date" name="payment date" > 
  <br><br>

  
  <input type="submit" value="Submit">

 </style=>
</form> 
</div>
</div>
</div>

<?php require 'Bar3/footer3.php';?>


</body>
</html>