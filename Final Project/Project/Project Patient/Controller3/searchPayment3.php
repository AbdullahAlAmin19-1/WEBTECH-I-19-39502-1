<?php
$searchByID = "";
require '../Model3/model3.php';
$data=showpayment($_GET['id']);
// echo $_GET['id'];
If($data!=null)
{
$id = $data["Id"];
$payment_amount = $data["Payment Amount"];
$payment_date = $data["Payment Date"];
$payment_time = $data["Payment Time"];
$appoinment_serial = $data["Appoinment Serial"];
$patient_id = $data["Patient Id"];
$doctor_id = $data["Doctor Id"];

echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>Payment ID</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Payment Amount/Doctor Fee</th>";
echo "<td  scope='row'>" . $payment_amount. "</td>";
echo "<tr>";
echo "<th class='table-dark'>Payment Date</th>";
echo "<td  scope='row'>" . $payment_date . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Payment Time</th>";
echo "<td  scope='row'>" . $payment_time . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Appointment serial</th>";
echo "<td  scope='row'>" . $appoinment_serial. "</td>";
echo "<tr>";
echo "<th class='table-dark'>Patient ID</th>";
echo "<td  scope='row'>" . $patient_id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Doctor ID</th>";
echo "<td  scope='row'>" . $doctor_id . "</td>";
echo "<tr>";
echo "</tr>";
echo "</table>";
}
else if($data==null)
{
	$searchByID="Payment ID not Found";
	echo $searchByID;
}

?>