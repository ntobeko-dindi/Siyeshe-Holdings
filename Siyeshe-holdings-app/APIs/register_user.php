<?php
include "connection.php"; 
$input = file_get_contents('php://input'); 
$data = json_decode($input, true); $message = array(); 
if($data['action'] == "insert"){    
  $name = $data['name'];    
  $surname = $data['surname'];  
  $username = $data['username'];    
  $email = $data['email'];
  $contact = $data['contact'];    
         
$q = mysqli_query($con, "INSERT INTO `Customers` ( `Name` ,`Surname` ,`Username` ,`Email` ,`Contact`) VALUES ('$name','$surname','$username','$email', '$contact')"); 
if($q)  {    
       $message['status'] = "success"; 
       }    
else{    
$message['status'] = "error";     
}    
echo json_encode($message); 
}
echo mysqli_error($con);
