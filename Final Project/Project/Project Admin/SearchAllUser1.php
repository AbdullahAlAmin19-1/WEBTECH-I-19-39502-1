
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class='table' style="margin-bottom: 70px;">
	<thead>
		<tr><th class='table-info'>User</th>
			<th class='table-info'>ID</th>
			<th class='table-info'>Name</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($table1 as $i => $user): ?>
			<tr>
				<th>
					Admin
			    </th>
				<th><?php echo $user['Id'] ?></th>
				<th scope='row' onClick="showData(<?php echo $user['Id'] ?>)"><?php echo $user['Name'] ?></th>
			</tr>
		<?php endforeach; ?>
		<?php foreach ($table2 as $i => $user): ?>
			<tr>
				<th>
					Employee
			    </th>
				<th><?php echo $user['Id'] ?></th>
				<th scope='row' onClick="showData1(<?php echo $user['Id'] ?>)"><?php echo $user['Name'] ?></th>
			</tr>
		<?php endforeach; ?>
		<?php foreach ($table3 as $i => $user): ?>
			<tr>
				<th>
					Doctor
				</th>
				<th><?php echo $user['Id'] ?></th>
				<th scope='row' onClick="showData2(<?php echo $user['Id'] ?>)"><?php echo $user['Name'] ?></th>
			</tr>
		<?php endforeach; ?>
		<tr>
		</tr>
		<?php foreach ($table4 as $i => $user): ?>
			<tr>
				<th>
					Paitent
				</th>
				<th><?php echo $user['Id'] ?></th>
				<th scope='row' onClick="showData3(<?php echo $user['Id'] ?>)"><?php echo $user['Name'] ?></th>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>