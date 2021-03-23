<!DOCTYPE html>
<html>
<head>
<title>Doctors</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");} 
?>
<h1 class="textCenter">Doctors Info</h1><br><br>
<div class="div">
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile Number</th>
    <th>Type</th>
    <th>Gender</th>
    <th>Fee</th>
    <th>Shift</th>
    <th>Address</th>
  </tr>
  <tr>
    <td>01</td>
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
    <td>02</td>
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
    <td>03</td>
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
    <td>04</td>
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
    <td>05</td>
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
    <td>06</td>
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
    <td>07</td>
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
    <td>08</td>
    <td>Mr. Belal</td>
    <td>mrbelal@yahoo.com</td>
    <td>01722333383</td>
    <td>Urologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Gulshan,Dhaka.</td>
  </tr><tr>
    <td>09</td>
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
    <td>10</td>
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
    <td>11</td>
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
    <td>12</td>
    <td>Mr. Baker</td>
    <td>mrbaker@yahoo.com</td>
    <td>01523333883</td>
    <td>Gastroenterologists</td>
    <td>Male</td>
    <td>600TK</td>
    <td>6PM - 9PM</td>
    <td>Khilgoan,Dhaka.</td>
  </tr><tr>
    <td>13</td>
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
    <td>14</td>
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
    <td>15</td>
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
    <td>16</td>
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
    <td>17</td>
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
<?php require 'Bar/footer.php';?>
</body>
</html>