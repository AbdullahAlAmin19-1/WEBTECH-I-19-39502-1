<?php
$searchByID = "";
require '../Model3/model3.php';
$data=showprescription($_GET['id']);
// echo $_GET['id'];
If($data!=null)
{
$id = $data["Id"];
$doctor_id = $data["Doctor Id"];
$patient_id = $data["Patient Id"];
$test = $data["Test"];
$medicine = $data["Medicine"];


echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>Appointment Serial</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Doctor Id</th>";
echo "<td  scope='row'>" . $doctor_id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient Id</th>";
echo "<td  scope='row'>" . $patient_id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Test</th>";
echo "<td  scope='row'>" . $test . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Medicine</th>";
echo "<td  scope='row'>" . $medicine . "</td>";
echo "<tr>";


echo "</tr>";
echo "</table>";
}
else if($data==null)
{
	$searchByID="Prescription Serial not Found";
	echo $searchByID;
}

?>