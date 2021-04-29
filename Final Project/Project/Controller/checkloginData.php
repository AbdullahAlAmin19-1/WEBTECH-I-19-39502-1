<?php 
require 'Model/model.php';

if($_POST['category']=="Admin")
{
$data=searchAdminData($_POST['name']);
if($data!= null)
{
	$name = $data["Name"];
  	$password = $data["Password"];
  	$category = $data["Category"];
  	$id = $data["Id"];
}
}
else if($_POST['category']=="Doctor")
{
$data=searchDoctorData($_POST['name']);
if($data!= null)
{
	$name = $data["Name"];
  	$password = $data["Password"];
  	$category = $data["Category"];
  	$id = $data["Id"];
}
}
else if($_POST['category']=="Patient")
{
$data=searchPatientData($_POST['name']);
if($data!= null)
{
	$name = $data["Name"];
  	$password = $data["Password"];
  	$category = $data["Category"];
  	$id = $data["Id"];
}
}
else if($_POST['category']=="Receptionist")
{
$data=searchReceptionistData($_POST['name']);
if($data!= null)
{
	$name = $data["Name"];
  	$password = $data["Password"];
  	$category = $data["Category"];
  	$id = $data["Id"];
}
}
?>