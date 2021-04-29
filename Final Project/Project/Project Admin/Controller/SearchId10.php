<?php
$searchByID = "";
require '../Model/model1.php';
$data=showData($_GET['id']);
//echo $_GET['id'];
If($data!=null)
{
$name = $data["Name"];
$id = $data["Id"];
$shift = $data["Shift"];
$email = $data["Email"];
$mobile = $data["Mobile Number"];
$address = $data["Address"];
$gender = $data["Gender"];
$dob = $data["Date of Birth"];
$image = $data["Image"];

echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-info'>ID</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-info'>Name</th>";
echo "<td  scope='row'>" . $name . "</td>";
echo "<tr>";
echo "<th class='table-info'>Shift</th>";
echo "<td  scope='row'>" . $shift . "</td>";
echo "<tr>";
echo "<th class='table-info'>Email</th>";
echo "<td  scope='row'>" . $email . "</td>";
echo "<tr>";
echo "<th class='table-info'>Mobile Number</th>";
echo "<td  scope='row'>" . $mobile . "</td>";
echo "<tr>";
echo "<th class='table-info'>Address</th>";
echo "<td  scope='row'>" . $address . "</td>";
echo "<tr>";
echo "<tr>";
echo "<th class='table-info'>Gender</th>";
echo "<td  scope='row'>" . $gender . "</td>";
echo "<tr>";
echo "<th class='table-info'>Date Of Birth</th>";
echo "<td  scope='row'>" . $dob . "</td>";
echo "<tr>";
echo "<th class='table-info'>Image</th>";
echo "<td  scope='row'><img src='Photos/" . $image . "' alt='Profile Picture'</td>";
echo "</tr>";
echo "</table><br><br><br><br>";
}
else if($data==null)
{
	$searchByID="ID not Found";
	echo $searchByID;
}

?>