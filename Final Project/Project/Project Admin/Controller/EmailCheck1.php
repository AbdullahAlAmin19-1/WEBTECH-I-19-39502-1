<?php
require_once ('Model/model1.php');
$data = showAllData();
foreach($data as $row)  
{ 
	if($_POST['email']==$row["Email"])
	{

		$email = $row["Email"];
  		return;

	}
}

?>