<!DOCTYPE html>
<html>
<head>
<title>Patients</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="JS/style.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");}
require 'Controller/showPatient.php'; 
?>
<div class="container">
<h1 class="textCenter">Patients Info</h1><br><br>
<div class="div">
<form method="post">
<?php If($data!=null): ?>
<table class="table">
    <thead class="table-dark">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Mobile Number</th>
    <th scope="col">Gender</th>
    <th scope="col">Date Of Birth</th>
    <th scope="col">Address</th>
    <th scope="col">Image</th>
  </tr>
</thead>
<?php foreach ($data as $i => $user): ?>
  <tr>
    <th scope="row"><?php echo $user['Id'] ?></th>
    <td><?php echo $user['Name'] ?></td>
    <td><?php echo $user['Email'] ?></td>
    <td><?php echo $user['Mobile Number'] ?></td>
    <td><?php echo $user['Gender'] ?></td>
    <td><?php echo $user['Date of Birth'] ?></td>
    <td><?php echo $user['Address'] ?></td>
    <td><?php echo $user['Image'] ?></td>
  </tr>
    <?php endforeach; ?>
  
</table>
<?php endif; 
if($data==null)
{
    $msg="Patient Information Not Available";
    echo $msg;
}
?>
</form>
</div>
</div>
<?php require 'Bar/footer.php';?>
</div>
</body>
</html>