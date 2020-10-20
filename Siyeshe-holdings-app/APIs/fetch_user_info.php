<?php
include "connection.php";  

$email = $_GET['email'];
$data=array(); 
$q=mysqli_query($con, "SELECT * FROM `Customers` WHERE `Email`=$email"); 
while ($row=mysqli_fetch_object($q)){ 
  $data[]=$row; 
}
echo json_encode($data); 
echo mysqli_error($con);
