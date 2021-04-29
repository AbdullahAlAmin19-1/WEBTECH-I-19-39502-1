<?php 

require 'Model/model1.php';

$data=searchData($_POST['user_name']);
if($data!= null)
{
	$user_name = $data["User Name"];
  	$password = $data["Password"];
  	$id = $data["Id"];
  	if ($data != null) {
  		$image = $data["Image"];
  	}
  	
}
?>