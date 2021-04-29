<?php  
require_once 'Controller3/allpaymentinfo3.php';

$payments = fetchAllPayments();

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Patient</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS3/style.css">
<link rel="stylesheet" href="CSS3/bootstrap.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="JS3/style.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar3/top13.php';}
else{header("location:Login3.php");}
?>
<div class="container">
	<div class="container-fluid, textCenter">
		<h1>Search Payment History</h1>
		<h4>Enter Payment No: 
			<input type="number" name="searchByID" id="searchByID" onkeyup="searchPayment(this.value)" onblur="searchPayment(this.value)">
			<span id="searchByIDErr"></span>
		</h4>
	
	</div>
</div>


	<div id="txtHint">

<h3 class="container-fluid, textCenter">All History of My Payment</h3>

<table class="table">
     <thead class="table-dark">
		<tr>
			<th>Payment ID</th>
			<th>Payment Amount/Doctor Fee</th>
			<th>Payment Date</th>
			<th>Payment Time</th>
			<th>Appointment serial</th>
			<th>Patient ID</th>
			<th>Doctor ID</th>
			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($payments as $i => $payment): ?>
			<tr>
			
				<td><?php echo $payment['Id'] ?></td>
				<td><?php echo $payment['Payment Amount'] ?></td>
				<td><?php echo $payment['Payment Date'] ?></td>
				<td><?php echo $payment['Payment Time'] ?></td>
				<td><?php echo $payment['Appoinment Serial'] ?></td>
				<td><?php echo $payment['Patient Id'] ?></td>
				<td><?php echo $payment['Doctor Id'] ?></td>
		
			</tr>
		<?php endforeach; ?>
		
	</tbody>
	
</table>
</div>

<?php require 'Bar3/footer3.php';?>

</div>

</body>
</html>