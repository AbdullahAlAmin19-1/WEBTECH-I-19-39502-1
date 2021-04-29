<?php
require_once ('model2/model2.php');
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