<?php
$msg = "";
require 'Model/model.php';
try 
{
    $data=showAllPatientData(); 
} 
catch (Exception $ex) {echo $ex->getMessage();}
//echo $_GET['id'];


?>