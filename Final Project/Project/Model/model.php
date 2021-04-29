<?php 

require_once 'db_connect.php';

function addDoctorData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `doctor`(`Name`, `Email`, `Mobile Number`, `Address`, `Password`, `Shift`, `Category`, `Gender`, `Date of Birth`)  VALUES (:name, :email, :mobile_number, :address, :password, :shift, :category, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':mobile_number' => $_POST['mobile_number'],
            ':address' => $_POST['address'],
            ':password' => $data,
            ':shift' => $_POST['shift'],
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
function addPatientData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `patient`(`Name`, `Email`, `Mobile Number`, `Address`, `Password`, `Shift`, `Category`, `Gender`, `Date of Birth`)  VALUES (:name, :email, :mobile_number, :address, :password, :shift, :category, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':mobile_number' => $_POST['mobile_number'],
            ':address' => $_POST['address'],
            ':password' => $data,
            ':shift' => $_POST['shift'],
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
function addReceptionistData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `receptionist`(`Name`, `Email`, `Mobile Number`, `Address`, `Password`, `Shift`, `Category`, `Gender`, `Date of Birth`)  VALUES (:name, :email, :mobile_number, :address, :password, :shift, :category, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':mobile_number' => $_POST['mobile_number'],
            ':address' => $_POST['address'],
            ':password' => $data,
            ':shift' => $_POST['shift'],
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

function showAllAdminData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `admin`';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAllDoctorData(){
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

function showAllPatientData(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `patient` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
} 

function showAllReceptionistData(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `receptionist` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAllAppointmentData(){
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

function showPaymentData($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `payment` where `Appoinment Serial` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function showAllPaymentData(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `payment` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `receptionist` set `Name` = ?, `Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `Id` = ?";
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
    $selectQuery = "UPDATE `receptionist` set `Password` = ? where `Id` = ?";
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
    $selectQuery = "UPDATE `receptionist` set `Image` = ? where `Id` = ?";
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

function delete($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `` WHERE `Id` = ?";
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
	$selectQuery = "SELECT * FROM `receptionist` where Id = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function searchAdminData($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` WHERE Name = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function searchDoctorData($name){
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

function searchPatientData($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient` WHERE Name = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function searchReceptionistData($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `receptionist` WHERE Name = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function searchName($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `receptionist` WHERE Name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>