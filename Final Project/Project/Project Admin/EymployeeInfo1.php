<?php  
require 'Controller/UserInfoCheck1.php';

$eymployees = fetchAllData1();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Eymployee Information</title>
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
<h2 class="textCenter">Receptionists Information</h2><br>
<div class="container-fluid div">
 <div class="container-fluid">   
<table class="table" style="margin-bottom: 80px;">
    <thead class="textCenter">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>Shift</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="textCenter">
        <?php foreach ($eymployees as $i => $eymployee): ?>
            <tr>
                <td><?php echo $eymployee['Id'] ?></a></td>
                <td><?php echo $eymployee['Name'] ?></a></td>
                <td><?php echo $eymployee['Email'] ?></td>
                <td><?php echo $eymployee['Address'] ?></a></td>
                <td><?php echo $eymployee['Mobile Number'] ?></a></td>
                <td><?php echo $eymployee['Date of Birth'] ?></a></td>
                <td><?php echo $eymployee['Gender'] ?></a></td>
                <td><?php echo $eymployee['Shift'] ?></a></td>
                <td><img width="100px" src="Photos/<?php echo $eymployee['Image'] ?>" alt="<?php echo $eymployee['Name'] ?>"></td>
                <td><a href="EditEym1.php?id=<?php echo $eymployee['Id'] ?>">Edit</a>&nbsp<a href="Controller/DeleteEym1.php?id=<?php echo $eymployee['Id'] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        

    </tbody>
    

</table>

<?php require 'Bar/Footer1.php';?>
</div>
</html>