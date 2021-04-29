<?php
$searchByID = "";
require '../Model/model.php';
$data=showData($_GET['id']);
//echo $_GET['id'];
If($data!=null)
{
$name = $data["Name"];
$id = $data["Id"];
$shift = $data["Shift"];
$email = $data["Email"];
$mobile_number = $data["Mobile Number"];
$address = $data["Address"];
$category = $data["Category"];
$gender = $data["Gender"];
$dob = $data["Date of Birth"];
$image = $data["Image"];

echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>ID</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Name</th>";
echo "<td  scope='row'>" . $name . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Shift</th>";
echo "<td  scope='row'>" . $shift . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Email</th>";
echo "<td  scope='row'>" . $email . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Mobile Number</th>";
echo "<td  scope='row'>" . $mobile_number . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Address</th>";
echo "<td  scope='row'>" . $address . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Category</th>";
echo "<td  scope='row'>" . $category . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Gender</th>";
echo "<td  scope='row'>" . $gender . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Date Of Birth</th>";
echo "<td  scope='row'>" . $dob . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Image</th>";
echo "<td  scope='row'><img src='Uploads/" . $image . "' alt='Profile Picture'</td>";
echo "</tr>";
echo "</table>";
}
else if($data==null)
{
	$searchByID="ID not Found";
	echo $searchByID;
}

?>