<?php
include '../connection.php';



$cart_id = $_POST['cart_id'];

$sqlQuery = "DELETE FROM cart_table WHERE cart_id = '$cart_id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}