<?php 
require 'Model/jsonCode.php';
$data=readFromJson("Json/data.json");
foreach($data as $row)  
{
	if($_SESSION['name']==$row["name"])
	{
		$name = $row["name"];
		$id = "0021";
		$shift = $row["shift"];
  		$email = $row["email"];
 		$mobile_number = $row["mobile_number"];
  		$address = $row["address"];
  		$category = $row["category"];
  		$gender = $row["gender"];
  		$dob = $row["dob"];
  		return;
	}
}

?>