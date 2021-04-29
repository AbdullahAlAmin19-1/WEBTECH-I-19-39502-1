<?php
$searchByName = "";
require '../Model/model.php';
try 
{
    $data=searchName($_GET['name']);
    
} 
catch (Exception $ex) {echo $ex->getMessage();}
//echo $_GET['id'];
If($data!=null)
{
	require_once '../searchalluser.php';
}
else if($data==null)
{
	$searchByName="Name not Found";
	echo $searchByName;
}

?>