<?php
$searchByID = "";
require '../Model2/model2.php';
$data=showpatient($_GET['id']);
// echo $_GET['id'];
If($data!=null)
{
$id = $data["Id"];
$appointment_date = $data["Appointment Date"];
$appointment_time = $data["Appointment Time"];
$patient_id = $data["Patient Id"];
$doctor_id = $data["Doctor Id"];




echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>Appointment Serial</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Appointment Date</th>";
echo "<td  scope='row'>" . $appointment_date  . "</td>";
echo "<tr>";
echo "<tr>";
echo "<th class='table-dark'>Appoinment Time</th>";
echo "<td  scope='row'>" . $appointment_time . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient Id</th>";
echo "<td  scope='row'>" . $patient_id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Doctor Id</th>";
echo "<td  scope='row'>" . $doctor_id . "</td>";
echo "<tr>";


echo "<tr>";

echo "</tr>";
echo "</table>";
}
else if($data==null)
{
	$searchByID="Sorry! Appointment Serial not Founded...";
	echo $searchByID;
}

?>