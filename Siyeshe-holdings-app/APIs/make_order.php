<?php
include "connection.php"; 
$input = file_get_contents('php://input'); 
$data = json_decode($input, true); $message = array(); 
if($data['action'] == "insert"){    
  $c_id = $data['customerID'];    
  $p_id = $data['productID'];  
  $price = $data['price'];        
         
$q = mysqli_query($con, "INSERT INTO `orders` ( `prodID` ,`custID` ,`cost` ,`orderDate`) VALUES ('$p_id','$c_id','$price',CURDATE())"); 
if($q)  {    
       $message['status'] = "success"; 
       }    
else{    
$message['status'] = "error";     
}    
echo json_encode($message); 
}
echo mysqli_error($con);
