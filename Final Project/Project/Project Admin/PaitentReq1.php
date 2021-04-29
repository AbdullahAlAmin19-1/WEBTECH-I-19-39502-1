<!DOCTYPE html>
<html>
<head>
<title>Patient Request List</title>
<link rel="stylesheet" href="CSS/style1.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{header("location:Login1.php");} 
?>
<h2 class="textCenter">Patient Registration List</h2><br>
<div class="div">
<form method="post">
<table style="margin-bottom: 30px;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile Number</th>
    <th>Gender</th>
    <th>Date Of Birth</th>
    <th>Address</th>
    <th>Approval</th>
  </tr>
  <tr>
    <td>001</td>
    <td>Mr. Mahfuz</td>
    <td>mrmahfuz@yahoo.com</td>
    <td>01623333383</td>
    <td>Male</td>
    <td>2000-01-02</td>
    <td>Uttara,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>002</td>
    <td>Mr. Rahman</td>
    <td>mrrahman@yahoo.com</td>
    <td>01723333383</td>
    <td>Male</td>
    <td>1995-01-02</td>
    <td>Uttara,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>003</td>
    <td>Mr. Hasib</td>
    <td>mrhasiv@yahoo.com</td>
    <td>01923333383</td>
    <td>Male</td>
    <td>2000-06-02</td>
    <td>Uttara,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>004</td>
    <td>Mr. Santo</td>
    <td>mrsanto@yahoo.com</td>
    <td>01626666683</td>
    <td>Male</td>
    <td>2000-06-02</td>
    <td>Banani,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>005</td>
    <td>Mrs. Rahima</td>
    <td>mrmrahima@yahoo.com</td>
    <td>01923333383</td>
    <td>Female</td>
    <td>2000-04-02</td>
    <td>Uttara,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>006</td>
    <td>Mr. Maha</td>
    <td>mrmaha@yahoo.com</td>
    <td>01623333383</td>
    <td>Male</td>
    <td>2000-08-02</td>
    <td>Uttara,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>007</td>
    <td>Mrs. Roy</td>
    <td>mrsroy@yahoo.com</td>
    <td>01523333383</td>
    <td>Female</td>
    <td>2000-04-03</td>
    <td>Bashundhara,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>008</td>
    <td>Mr. Rashid</td>
    <td>mrrashid@yahoo.com</td>
    <td>01623333383</td>
    <td>Male</td>
    <td>2000-01-02</td>
    <td>Uttara,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>009</td>
    <td>Mr. Sadat</td>
    <td>mrsadat@yahoo.com</td>
    <td>01323333383</td>
    <td>Male</td>
    <td>1991-05-02</td>
    <td>Mirpur,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr><tr>
    <td>009</td>
    <td>Mrs. Sadat</td>
    <td>mrssadat@yahoo.com</td>
    <td>01623388383</td>
    <td>Female</td>
    <td>1995-01-02</td>
    <td>Mirpur,Dhaka.</td>
    <td><input type="submit" name="Submit" value="Approve"> <a href="">Cancel</a></td>
  </tr>
  
</table>
</form>
</div>
<?php require 'Bar/Footer1.php';?>
</body>
</html>