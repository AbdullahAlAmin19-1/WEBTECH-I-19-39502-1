<?php 

require_once '../Model/model1.php';

if (deleteData1($_GET['id'])) {
    header('Location: ../EymployeeInfo1.php');
}

 ?>