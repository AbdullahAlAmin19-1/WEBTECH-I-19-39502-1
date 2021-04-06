<!DOCTYPE html>
<html>
<head>
<title>Patients</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");} 
?>
<div class="container">
<h1 class="textCenter">Patients Info</h1><br><br>
<div class="div">
<form method="post">
<table class="table sFont">
    <thead class="table-dark">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Mobile Number</th>
    <th scope="col">Gender</th>
    <th scope="col">Date Of Birth</th>
    <th scope="col">Address</th>
    <th scope="col">Doctor Name</th>
    <th scope="col">Doctor Id</th>
    <th scope="col">Doctor Fee</th>
    <th scope="col">Payment Date</th>
    <th scope="col">Appointment Date</th>
    <th scope="col">Serial</th>
    <th scope="col">Confirmation</th>
  </tr>
</thead>
  <tr>
    <th scope="row">001</th>
    <td>Mr. Mahfuz</td>
    <td>mrmahfuz@yahoo.com</td>
    <td>01623333383</td>
    <td>Male</td>
    <td>2000-01-02</td>
    <td>Uttara,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal" selected>Mr. Iqbal</option> 
        <option value="Mrs. Fatema">Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>03</td>
    <td>600</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">002</th>
    <td>Mr. Rahman</td>
    <td>mrrahman@yahoo.com</td>
    <td>01723333383</td>
    <td>Male</td>
    <td>1995-01-02</td>
    <td>Uttara,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal" selected>Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema">Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>02</td>
    <td>500</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">003</th>
    <td>Mr. Hasib</td>
    <td>mrhasiv@yahoo.com</td>
    <td>01923333383</td>
    <td>Male</td>
    <td>2000-06-02</td>
    <td>Uttara,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim" selected>Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema">Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>01</td>
    <td>600</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">004</th>
    <td>Mr. Santo</td>
    <td>mrsanto@yahoo.com</td>
    <td>01626666683</td>
    <td>Male</td>
    <td>2000-06-02</td>
    <td>Banani,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema">Mrs. Fatema</option>
        <option value="Mr.Kader" selected>Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>05</td>
    <td>600</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">005</th>
    <td>Mrs. Rahima</td>
    <td>mrmrahima@yahoo.com</td>
    <td>01923333383</td>
    <td>Female</td>
    <td>2000-04-02</td>
    <td>Uttara,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema" selected>Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>04</td>
    <td>500</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">006</th>
    <td>Mr. Maha</td>
    <td>mrmaha@yahoo.com</td>
    <td>01623333383</td>
    <td>Male</td>
    <td>2000-08-02</td>
    <td>Uttara,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema">Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker" selected>Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>06</td>
    <td>600</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">007</th>
    <td>Mrs. Roy</td>
    <td>mrsroy@yahoo.com</td>
    <td>01523333383</td>
    <td>Female</td>
    <td>2000-04-03</td>
    <td>Badda,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema">Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima" selected>Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>07</td>
    <td>600</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">008</th>
    <td>Mr. Rashid</td>
    <td>mrrashid@yahoo.com</td>
    <td>01623333383</td>
    <td>Male</td>
    <td>2000-01-02</td>
    <td>Uttara,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema">Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal" selected>Mr. Belal</option>
        </select>
    </td>
    <td>08</td>
    <td>600</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>1</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">009</th>
    <td>Mr. Sadat</td>
    <td>mrsadat@yahoo.com</td>
    <td>01323333383</td>
    <td>Male</td>
    <td>1991-05-02</td>
    <td>Mirpur,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema" selected>Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>04</td>
    <td>500</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>2</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  <tr>
    <th scope="row">009</th>
    <td>Mrs. Sadat</td>
    <td>mrssadat@yahoo.com</td>
    <td>01623388383</td>
    <td>Female</td>
    <td>1995-01-02</td>
    <td>Mirpur,Dhaka.</td>
    <td>
        <select name="doctorName" id="doctorName">
        <option value="Mr.Rahim">Mr. Rahim</option>
        <option value="Mr. kamal">Mr. kamal</option>
        <option value="Mr. Iqbal">Mr. Iqbal</option> 
        <option value="Mrs. Fatema" selected>Mrs. Fatema</option>
        <option value="Mr.Kader">Mr. Kader</option>
        <option value="Mr.Baker">Mr. Baker</option>
        <option value="Mrs.Rahima">Mrs. Rahima</option>
        <option value="Mr.Belal">Mr. Belal</option>
        </select>
    </td>
    <td>04</td>
    <td>500</td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="2021-03-16"></td>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="2021-03-17"></td>
    <td>3</td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a></td>
  </tr>
  
</table>
</form>
</div>
</div>
<?php require 'Bar/footer.php';?>
</div>
</body>
</html>