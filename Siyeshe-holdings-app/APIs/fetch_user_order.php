<?php
include "connection.php";  

$id = $_GET['id'];
$data=array(); 
$q=mysqli_query($con, "SELECT orders.prodID,orders.orderID,products.prodDescription,orders.cost FROM `orders` INNER JOIN products ON products.prodID = orders.prodID WHERE custID=$id"); 
while ($row=mysqli_fetch_object($q)){ 
  $data[]=$row; 
}
echo json_encode($data); 
echo mysqli_error($con);
