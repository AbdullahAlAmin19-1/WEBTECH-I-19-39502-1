<!DOCTYPE html>
<html>
<head>
<title>Receptionist Request List</title>
<link rel="stylesheet" href="CSS/style1.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{header("location:Login1.php");} 
?>
<h2 class="textCenter">Receptionist Registration List</h2><br>
<div class="div">
<table style="margin-bottom: 30px;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Educational Background</th>
    <th>Institute</th>
    <th>Gender</th>
    <th>Shift</th>
    <th>Address</th>
    <th>Approval</th>
  </tr>
  <tr>
    <td>01</td>
    <td>Mr. Fahim</td>
    <td>mrfahim@yahoo.com</td>
    <td>01842165883</td>
    <td style="text-align: center;">BBA</td>
    <td style="text-align: center;">BRAC</td>
    <td>Male</td>
    <td>8AM - 4PM</td>
    <td>Uttara, Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr>
  <tr>
    <td>02</td>
    <td>Mr. Mahim</td>
    <td>mrmahim@yahoo.com</td>
    <td>01722154883</td>
    <td style="text-align: center;">A Level</td>
    <td style="text-align: center;">Mastermind</td>
    <td>Male</td>
    <td>4PM - 12PM</td>
    <td>Banani, Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr>
  <tr>
    <td>03</td>
    <td>Mr. Arnob</td>
    <td>mrarnob@yahoo.com</td>
    <td>01562165883</td>
    <td style="text-align: center;">CSE</td>
    <td style="text-align: center;">AIUB</td>
    <td>Male</td>
    <td>4PM - 12PM</td>
    <td>Mohammadpur, Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr>
  <tr>
    <td>04</td>
    <td>FA. Ananya</td>
    <td>faananya@yahoo.com</td>
    <td>01562165883</td>
    <td style="text-align: center;">Sociallogy</td>
    <td style="text-align: center;">EWU</td>
    <td>Female</td>
    <td>8AM - 4PM</td>
    <td>Mohakhali DOHS, Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr>
  <tr>
    <td>05</td>
    <td>Mr. Asif</td>
    <td>mrasif@yahoo.com</td>
    <td>01662165883</td>
    <td style="text-align: center;">Hons</td>
    <td style="text-align: center;">Dhaka College</td>
    <td>Male</td>
    <td>4PM - 12PM</td>
    <td>Dhanmondi, Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr>
</table>
</div>
<?php require 'Bar/Footer1.php';?>
</body>
</html>