<?php 
require 'Model3/model3.php';
$data=searchData($_POST['name']);
if($data!= null)
{
	$name = $data["Name"];
  	$password = $data["Password"];
  	$category = $data["Category"];
  	$id = $data["Id"];
}
?>