<?php 
require 'Model/model.php';
$data=searchData($_POST['name']);
if($data!= null)
{
	$name = $data["Name"];
  	$password = $data["Password"];
  	$category = $data["Category"];
}
?>