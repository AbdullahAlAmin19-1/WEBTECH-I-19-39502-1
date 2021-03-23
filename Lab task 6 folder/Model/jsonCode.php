<?php
  function writeToJson() 
  {
    if(file_exists('Json/data.json'))  
      {  
        $current_data = file_get_contents('Json/data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
        'name'            =>     $_POST['name'],
        'email'           =>     $_POST['email'],
        'mobile_number'   =>     $_POST['mobile_number'],
        'shift'           =>     $_POST['shift'],
        'address'         =>     $_POST['address'],
        'password'        =>     $_POST['password'],
        'category'        =>     $_POST['category'],
        'gender'          =>     $_POST["gender"],  
        'dob'             =>     $_POST["dob"]);  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('Json/data.json', $final_data))  
        {  
          echo "Information Updated Successfully";
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