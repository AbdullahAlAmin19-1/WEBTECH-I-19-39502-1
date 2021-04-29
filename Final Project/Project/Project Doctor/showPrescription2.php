<?php  
require_once 'Controller2/prescriptioninfo2.php';
$prescriptions = fetchAllprescriptions();
?>

<!DOCTYPE html>
<html>
<head>
<title>Prescription</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS2/style2.css">
<link rel="stylesheet" href="CSS2/bootstrap2.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="JS2/style2.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar2/top22.php';}
else{header("location:Login2.php");}
?>
 <div class="container">
	<div class="container-fluid, textCenter">
		<h1>Search Individual Prescription Info</h1>
		
		<form action=""> 
<select name="prescription" id="prescription" onchange=" searchPrescription(this.value)">
<option value="">Select Prescription No:</option>
<option value="1">1</option>
<!-- <option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option> -->
<option value="">No More Prescription</option>
</select>
</form>
<hr>
<br><br>

	</div>
</div> 


	<div id="txtHint">

<h3 class="container-fluid, textCenter">Full Prescription History</h3>

<table class="table">
     <thead class="table-dark">
		<tr>
			<th>Prescription Id</th>
			<th>Doctor Id</th>
			<th>Patient Id</th>
			<th>Medicine</th>
			<th>Test</th>
			
		
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($prescriptions as $i => $prescription): ?>
			<tr>
			
				<td><?php echo $prescription['Id'] ?></td>
				<td><?php echo $prescription['Doctor Id'] ?></td>
				<td><?php echo $prescription['Patient Id'] ?></td>
				<td><?php echo $prescription['Test'] ?></td>
				<td><?php echo $prescription['Medicine'] ?></td>
			
				
		
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</div>


<?php require 'Bar2/footer2.php';?>

</div>

</body>
</html>