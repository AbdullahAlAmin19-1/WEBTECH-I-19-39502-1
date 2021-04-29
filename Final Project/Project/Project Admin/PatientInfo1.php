<?php  
require 'Controller/UserInfoCheck1.php';

$patients = fetchAllData3();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Information</title>
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
<h2 class="textCenter">Patient Information</h2><br>
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
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="textCenter">
        <?php foreach ($patients as $i => $patient): ?>
            <tr>
                <td><?php echo $patient['Id'] ?></a></td>
                <td><?php echo $patient['Name'] ?></a></td>
                <td><?php echo $patient['Email'] ?></td>
                <td><?php echo $patient['Address'] ?></a></td>
                <td><?php echo $patient['Mobile Number'] ?></a></td>
                <td><?php echo $patient['Date of Birth'] ?></a></td>
                <td><?php echo $patient['Gender'] ?></a></td>
                <td><img width="100px" src="Photos/<?php echo $patient['Image'] ?>" alt="<?php echo $patient['Name'] ?>"></td>
                <td><a href="EditPatient1.php?id=<?php echo $patient['Id'] ?>">Edit</a>&nbsp<a href="Controller/DeletePatient1.php?id=<?php echo $patient['Id'] ?>">Delete</a></td></td>
            </tr>
        <?php endforeach; ?>
        

    </tbody>
</table>

<?php require 'Bar/Footer1.php';?>
</div>
</html>