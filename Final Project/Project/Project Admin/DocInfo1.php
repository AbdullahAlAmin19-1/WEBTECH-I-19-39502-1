<?php  
require 'Controller/UserInfoCheck1.php';

$doctors = fetchAllData2();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Information</title>
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
<h2 class="textCenter">Doctor Information</h2><br>
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
        <?php foreach ($doctors as $i => $doctor): ?>
            <tr>
                <td><?php echo $doctor['Id'] ?></a></td>
                <td><?php echo $doctor['Name'] ?></a></td>
                <td><?php echo $doctor['Email'] ?></td>
                <td><?php echo $doctor['Address'] ?></a></td>
                <td><?php echo $doctor['Mobile Number'] ?></a></td>
                <td><?php echo $doctor['Date of Birth'] ?></a></td>
                <td><?php echo $doctor['Gender'] ?></a></td>
                <td><?php echo $doctor['Shift'] ?></a></td>
                <td><img width="100px" src="Photos/<?php echo $doctor['Image'] ?>" alt="<?php echo $doctor['Name'] ?>"></td>
                <td><a href="EditDoc1.php?id=<?php echo $doctor['Id'] ?>">Edit</a>&nbsp<a href="Controller/DeleteDoc1.php?id=<?php echo $doctor['Id'] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        

    </tbody>
    

</table>

<?php require 'Bar/Footer1.php';?>
</div>
</html>