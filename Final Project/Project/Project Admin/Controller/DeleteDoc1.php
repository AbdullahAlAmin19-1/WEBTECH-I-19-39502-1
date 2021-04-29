<?php 

require_once '../Model/model1.php';

if (deleteData2($_GET['id'])) {
    header('Location: ../DocInfo1.php');
}

 ?>