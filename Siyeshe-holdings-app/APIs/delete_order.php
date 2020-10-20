<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

$con = new mysqli("localhost", "root", "", "inventory") or die("could not connect DB");

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
  if (isset($_GET['orderID'])) {
    //$id = $con->real_escape_string($_GET['orderID']);
      $id = $_GET['orderID'];
    $sql = $con->query("DELETE FROM orders WHERE orderID=$id");

    if ($sql) {
      exit(json_encode(array('status' => "success")));
    } else {
      exit(json_encode(array('status' => "error"+$id)));
    }
  }
}
