<?php
include '../connection.php';



$cart_id = $_POST['cart_id'];
$quantity = $_POST['quantity'];

$sqlQuery = "UPDATE cart_table SET quantity = '$quantity' WHERE cart_id = '$cart_id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}