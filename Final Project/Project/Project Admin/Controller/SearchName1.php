<?php
$searchByName = "";
require '../Model/model1.php';
try 
{
    $table1=searchName1($_GET['name']);
    $table2=searchName2($_GET['name']);
    $table3=searchName3($_GET['name']);
    $table4=searchName4($_GET['name']);
} 
catch (Exception $ex) {echo $ex->getMessage();}
//echo $_GET['id'];
If($table1!=null && $table2!=null && $table3!=null && $table4!=null) 
{
	require_once '../SearchAllUser1.php';
}
else if($table1==null && $table2==null && $table3==null && $table4==null)
{
	$SearchByName="Name Not Found";
	echo $SearchByName;
}

?>