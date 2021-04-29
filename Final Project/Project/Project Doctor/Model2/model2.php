<?php 

require_once 'db_connect2.php';

function addData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `doctor`(`Name`, `Email`, `Password`,`Mobile Number`,`Type` ,`Shift`,`Doctor Fee`, `Address`, `Category`, `Gender`, `Date of Birth`)  VALUES (:name, :email, :password,:mobile_number,:type,:shift, :doctor_fee, :address, :category, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => $data,
            ':mobile_number' => $_POST['mobile_number'],
            ':type' => $_POST['type'],
            ':shift' => $_POST['shift'],
            ':doctor_fee' => $_POST['doctor_fee'],
            ':address' => $_POST['address'],
            ':category' => $_POST['category'],
            ':gender' => $_POST['gender'],
            ':dob' => $_POST['dob']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function showAllData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `doctor` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
//for appointment table
function showAllPatient(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `appointment` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
//for appointment table
function showpatient($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `appointment` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

//for pagination prescription table
function showAllPrescriptions(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `prescription` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
//for pagination prescription table
function showPrescription($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `prescription` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}




function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `Name` = ?, `Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['mobile_number'], $data['address'], $data['shift'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `Password` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePicture($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `Image` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteUser($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `doctor` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showData($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `doctor` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function searchData($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `doctor` WHERE Name = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
?>