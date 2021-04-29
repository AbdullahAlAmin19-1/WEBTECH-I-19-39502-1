<?php
require_once ('model3/model3.php');
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