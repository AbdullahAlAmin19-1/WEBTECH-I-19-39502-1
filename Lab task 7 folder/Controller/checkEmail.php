<?php
require_once ('model/model.php');
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