<?php
$flag = "1";
require_once ('model/model.php');
if($flag=="1")
{
$data = showAllAdminData();
foreach($data as $row)  
{ 
	if($_POST['email']==$row["Email"])
	{

		$email = $row["Email"]; $flag = "0";
  		return;

	}
}
}

if($flag=="1")
{
$data = showAllDoctorData();
foreach($data as $row)  
{ 
	if($_POST['email']==$row["Email"])
	{

		$email = $row["Email"]; $flag = "0";
  		return;

	}
}
}

if($flag=="1")
{
$data = showAllPatientData();
foreach($data as $row)  
{ 
	if($_POST['email']==$row["Email"])
	{

		$email = $row["Email"]; $flag = "0";
  		return;

	}
}
}

if($flag=="1")
{
$data = showAllReceptionistData();
foreach($data as $row)  
{ 
	if($_POST['email']==$row["Email"])
	{

		$email = $row["Email"]; $flag = "0";
  		return;

	}
}
}

?>