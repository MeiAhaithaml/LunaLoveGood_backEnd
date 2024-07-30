<?php
include '../connection.php';

//POST = send/save data to mysql db
//GET = retrieve/read data from mysql db

$userName = $_POST['user_name'];
$userEmail = $_POST['user_phone'];
$userPassword = md5($_POST['user_password']); 
$userAddress = $_POST['user_address'];
$sqlQuery = "INSERT INTO users_table SET user_name = '$userName', user_phone = '$userEmail', user_password = '$userPassword', user_address = '$userAddress' ";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}