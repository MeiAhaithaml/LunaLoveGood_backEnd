<?php
include '../connection.php';



$order_id = $_POST['order_id'];


$sqlQuery = "UPDATE order_table SET status = 'received' WHERE order_id = '$order_id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}