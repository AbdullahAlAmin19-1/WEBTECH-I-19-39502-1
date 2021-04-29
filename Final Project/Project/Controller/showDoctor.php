<?php
$msg = "";
require 'Model/model.php';
try 
{
    $data=showAllDoctorData(); 
} 
catch (Exception $ex) {echo $ex->getMessage();}
//echo $_GET['id'];


?>