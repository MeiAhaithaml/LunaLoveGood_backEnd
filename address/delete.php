<?php
include '../connection.php';

$user_id = $_POST['user_id'];
$user_phone = $_POST['user_phone'];
$user_address = $_POST['user_address'];

$sqlQuery = "DELETE FROM address_tables WHERE user_id = '$user_id', user_phone = '$user_phone', user_address = '$user_address'";
$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}