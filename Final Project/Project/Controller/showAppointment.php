<?php
$searchByName = "";
require 'Model/model.php';
try 
{
    $appointment=showAllAppointmentData();
} 
catch (Exception $ex) {echo $ex->getMessage();}
//echo $_GET['id'];


?>