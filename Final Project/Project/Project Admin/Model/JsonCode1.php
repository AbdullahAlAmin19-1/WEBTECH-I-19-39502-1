<?php
  function writeToJson() 
  {
    if(file_exists('Json/Data1.json'))  
      {  
        $current_data = file_get_contents('Json/Data1.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
        'name'            =>     $_POST['name'],
        'email'           =>     $_POST['email'],
        'user_name'       =>     $_POST['user_name'],
        'mobile'          =>     $_POST['mobile'],
        'shift'           =>     $_POST['shift'],
        'address'         =>     $_POST['address'],
        'password'        =>     $_POST['password'],
        'gender'          =>     $_POST["gender"],  
        'dob'             =>     $_POST["dob"]);  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('Json/Data1.json', $final_data))  
        {  
          echo "Registration Request Submitted";
        } 
      } 
      else  
      {  
        echo "JSON File not exits";  
      }
  }

function readFromJson($file) 
  {
    $data = file_get_contents($file);
    $data = json_decode($data, true);
    return $data;
  }
 
?>