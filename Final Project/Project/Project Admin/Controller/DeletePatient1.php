<?php 

require_once '../Model/model1.php';

if (deleteData3($_GET['id'])) {
    header('Location: ../PatientInfo1.php');
}

 ?>