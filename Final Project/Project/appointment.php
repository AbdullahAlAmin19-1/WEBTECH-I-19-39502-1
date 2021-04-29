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
require 'Controller/showAppointment.php';
?>
<div class="container">
<h1 class="textCenter">Patients Info</h1><br><br>
<div class="div">
<?php If($appointment!=null): ?>
<form method="post">
<table class="table">
    <thead class="table-dark">
  <tr>
    <th scope="col">Patient ID</th>
    <th scope="col">Doctor ID</th>
    <th scope="col">Appointment Serial</th>
    <th scope="col">Appointment Date</th>
    <th scope="col">Appointment Time</th>
    <th scope="col">Payment ID</th>
    <th scope="col">Payment Ammount</th>
    <th scope="col">Payment Date</th>
    <th scope="col">Payment Time</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<?php foreach ($appointment as $i => $user): 
try {$payment=showPaymentData($user['Id']);} 
catch (Exception $ex) {echo $ex->getMessage();}
?>

  <tr>
    <th scope="col"><?php echo $user['Patient Id'] ?></th>
    <th scope="col"><?php echo $user['Doctor Id'] ?></th>
    <th scope="col"><?php echo $user['Id'] ?></th>
    <td><input type="date" id="appointmentDate" name="appointmentDate" value="<?php echo $user['Appointment Date'] ?>"></td>
    <td><input type="text" id="appointmentTime" name="appointmentTime" value="<?php echo $user['Appointment Time'] ?>"></td>
    <th scope="col"><?php echo $payment['Id'] ?></th>
    <td><input type="text" id="paymentAmount" name="paymentAmount" value="<?php echo $payment['Payment Amount'] ?>"></td>
    <td><input type="date" id="paymentDate" name="paymentDate" value="<?php echo $payment['Payment Date'] ?>"></td>
    <td><input type="text" id="paymentTime" name="paymentTime" value="<?php echo $payment['Payment Time'] ?>"></td>
    <td><input type="submit" name="Submit"> <a href="">Delete</a><br><a href="">Add Appointment</a></td>
  </tr>
<?php endforeach; ?>
</table>
</form>
<?php endif; 
if($appointment==null)
{
    $searchByName="Patient Information and Appointment Information Not Available";
    echo $searchByName;
}
?>
</div>
</div>
<?php require 'Bar/footer.php';?>
</div>
</body>
</html>