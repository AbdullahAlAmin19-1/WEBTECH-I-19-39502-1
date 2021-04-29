<?php  
require_once '../Model/model1.php';

if (isset($_POST['UpdateEmp1'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['mobile_number'] = $_POST['mobile_number'];
	$data['address'] = $_POST['address'];
	$data['shift'] = $_POST['shift'];

	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;
	/* $data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../Photos/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	*/


  if (updateData1($_POST['id'], $data)) {
  	
  	//redirect to showStudent
  	echo 'Successfully updated!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>