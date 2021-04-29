<?php 

require_once 'db_connect.php';

function addData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `admin`(`Name`, `User Name`, `Email`, `Mobile Number`, `Address`, `Password`, `Shift`, `Gender`, `Date of Birth`, `Adminreq`)  VALUES (:name, :user_name, :email, :mobile, :address, :password, :shift, :gender, :dob, :adminreq)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':user_name' => $_POST['user_name'],
            ':email' => $_POST['email'],
            ':mobile' => $_POST['mobile'],
            ':address' => $_POST['address'],
            ':password' => $data,
            ':shift' => $_POST['shift'],
            ':gender' => $_POST['gender'],
            ':dob' => $_POST['dob'],
            ':adminreq' => $_POST['adminreq']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function addData1($data){
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

function addData2($data){
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

function addData3($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `patient`(`Name`, `Email`, `Mobile Number`, `Address`, `Password`,  `Category`, `Gender`, `Date of Birth`)  VALUES (:name, :email, :mobile_number, :address, :password,  :category, :gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':mobile_number' => $_POST['mobile_number'],
            ':address' => $_POST['address'],
            ':password' => $data,
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

function updatePicture($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `admin` set `Image` = ? where `Id` = ?";
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

function updatePassword($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `admin` set `Password` = ? where `Id` = ?";
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

function showAllData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `admin` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAllData1(){
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

function showAllData2(){
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

function showAllData3(){
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

function showData($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` where Id = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function showData1($id){
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

function showData2($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `doctor` where Id = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function showData3($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient` where Id = ?";
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
    $selectQuery = "UPDATE `admin` set `Name` = ?, `User Name` = ?,`Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['user_name'], $data['email'], $data['mobile'], $data['address'], $data['shift'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateData1($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `receptionist` set `Name` = ?,`Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `ID` = ?";
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

function updateData2($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `Name` = ?,`Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `ID` = ?";
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

function updateData3($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `patient` set `Name` = ?,`Email` = ?, `Mobile Number` = ?, `Address` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['mobile_number'], $data['address'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteData($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `admin` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteData1($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `receptionist` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteData2($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `doctor` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteData3($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `patient` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function searchData($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` WHERE `User Name` = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}


function searchName1($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` WHERE Name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchName2($name){
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

function searchName3($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `doctor` WHERE Name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchName4($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `patient` WHERE Name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>