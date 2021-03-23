<?php 
require 'Model/jsonCode.php';
$data=readFromJson("Json/data.json");
foreach($data as $row)  
{ 
	if($_POST['email']==$row["email"])
	{

		$email = $row["email"];
  		return;

	}
}

?>