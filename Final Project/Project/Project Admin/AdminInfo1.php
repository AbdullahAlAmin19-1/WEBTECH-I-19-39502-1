<?php  
require_once 'Controller/UserInfoCheck1.php';

$admins = fetchAllData();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Information</title>
<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['user_name'])){require 'Bar/Top11.php';}
else{header("location:Login1.php");} 
?>
<br>
<h2 class="textCenter">Admin Information</h2><br>
<div class="container-fluid div">
 <div class="container-fluid">   
<table class="table" style="margin-bottom: 80px;">
	<thead class="textCenter">
		<tr class="table-dark">
			<th>ID</th>
			<th>Name</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Mobile</th>
			<th>Date Of Birth</th>
			<th>Gender</th>
			<th>Shift</th>
			<th>Image</th>
		</tr>
	</thead>
	<tbody class="textCenter">
		<?php foreach ($admins as $i => $admin): ?>
			<tr>
				<td><?php echo $admin['Id'] ?></a></td>
				<td><?php echo $admin['Name'] ?></a></td>
				<td><?php echo $admin['User Name'] ?></td>
				<td><?php echo $admin['Email'] ?></td>
				<td><?php echo $admin['Address'] ?></a></td>
				<td><?php echo $admin['Mobile Number'] ?></a></td>
				<td><?php echo $admin['Date of Birth'] ?></a></td>
				<td><?php echo $admin['Gender'] ?></a></td>
				<td><?php echo $admin['Shift'] ?></a></td>
				<td><img width="100px" src="Photos/<?php echo $admin['Image'] ?>" alt="<?php echo $admin['Name'] ?>"></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

<?php require 'Bar/Footer1.php';?>
</div>
</html>