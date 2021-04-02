<!DOCTYPE html>
<html>
<head>
<title>Doctors</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");} 
?>
<div class="container-fluid">
  <div class="container">
<h1 class="textCenter">Doctors Info</h1><br><br>
<div class="div">
<table class="table">
    <thead class="table-dark">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Mobile Number</th>
    <th scope="col">Type</th>
    <th scope="col">Gender</th>
    <th scope="col">Fee</th>
    <th scope="col">Shift</th>
    <th scope="col">Address</th>
  </tr>
</thead>
  <tr>
    <th scope="row">01</th>
    <td>Mr. Rahim</td>
    <td>mrrahim@yahoo.com</td>
    <td>01722165883</td>
    <td>Ophthalmologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">02</th>
    <td>Mr. kamal</td>
    <td>mrkamal@yahoo.com</td>
    <td>01655165883</td>
    <td>Dermatologists</td>
    <td>Male</td>
    <td>500TK</td>
    <td>6PM - 9PM</td>
    <td>Uttara,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">03</th>
    <td>Mr. Iqbal</td>
    <td>mriqbal@yahoo.com</td>
    <td>01823365883</td>
    <td>Ophthalmologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Mohakhali,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">04</th>
    <td>Mrs. Fatema</td>
    <td>mrsfatema@yahoo.com</td>
    <td>01386465883</td>
    <td>Cardiologists</td>
    <td>Female</td>
    <td>500TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">05</th>
    <td>Mr. Kader</td>
    <td>mrrahim@yahoo.com</td>
    <td>01923335883</td>
    <td>Endocrinologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">06</th>
    <td>Mr. Baker</td>
    <td>mrbaker@yahoo.com</td>
    <td>01523333883</td>
    <td>Gastroenterologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Khilgoan,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">07</th>
    <td>Mrs. Rahima</td>
    <td>mrsrahima@yahoo.com</td>
    <td>01822555883</td>
    <td>Nephrologists</td>
    <td>Female</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">08</th>
    <td>Mr. Belal</td>
    <td>mrbelal@yahoo.com</td>
    <td>01722333383</td>
    <td>Urologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Gulshan,Dhaka.</td>
  </tr><tr>
    <th scope="row">09</th>
    <td>Mr. Iqbal</td>
    <td>mriqbal@yahoo.com</td>
    <td>01823365883</td>
    <td>Ophthalmologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Mohakhali,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">10</th>
    <td>Mrs. Fatema</td>
    <td>mrsfatema@yahoo.com</td>
    <td>01386465883</td>
    <td>Cardiologists</td>
    <td>Female</td>
    <td>500TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">11</th>
    <td>Mr. Kader</td>
    <td>mrrahim@yahoo.com</td>
    <td>01923335883</td>
    <td>Endocrinologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">12</th>
    <td>Mr. Baker</td>
    <td>mrbaker@yahoo.com</td>
    <td>01523333883</td>
    <td>Gastroenterologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Khilgoan,Dhaka.</td>
  </tr><tr>
    <th scope="row">13</th>
    <td>Mr. Iqbal</td>
    <td>mriqbal@yahoo.com</td>
    <td>01823365883</td>
    <td>Ophthalmologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Mohakhali,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">14</th>
    <td>Mrs. Fatema</td>
    <td>mrsfatema@yahoo.com</td>
    <td>01386465883</td>
    <td>Cardiologists</td>
    <td>Female</td>
    <td>500TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">15</th>
    <td>Mr. Kader</td>
    <td>mrrahim@yahoo.com</td>
    <td>01923335883</td>
    <td>Endocrinologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">16</th>
    <td>Mr. Baker</td>
    <td>mrbaker@yahoo.com</td>
    <td>01523333883</td>
    <td>Gastroenterologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Khilgoan,Dhaka.</td>
  </tr>
  <tr>
    <th scope="row">17</th>
    <td>Mrs. Rahima</td>
    <td>mrsrahima@yahoo.com</td>
    <td>01822555883</td>
    <td>Nephrologists</td>
    <td>Female</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Banani,Dhaka.</td>
  </tr>
</table>
</div>
</div>
</div>
<?php require 'Bar/footer.php';?>
</body>
</html>