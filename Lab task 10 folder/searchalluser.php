
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name']) && $data!=null){}
else{header("location:login.php");} 
?>
<table  class='table'>
	<thead>
		<tr>
			<th class='table-dark'>ID</th>
			<th class='table-dark'>Name</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $i => $user): ?>
			<tr>
				<th scope='row' onClick="showData(<?php echo $user['ID'] ?>)"><?php echo $user['ID'] ?></th>
				<th scope='row' onClick="showData(<?php echo $user['ID'] ?>)"><?php echo $user['Name'] ?></th>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>