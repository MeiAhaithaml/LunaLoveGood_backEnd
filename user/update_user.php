<?php
include '../connection.php';

//POST = send/save data to mysql db
//GET = retrieve/read data from mysql db
$userId = $_POST['user_id'];
$userName = $_POST['user_name'];
$userEmail = $_POST['user_phone'];
$userAddress = $_POST['user_address'];

// Cập nhật thông tin người dùng trong cơ sở dữ liệu
$sqlQuery = "UPDATE users_table SET user_name = '$userName', user_phone = '$userEmail', user_address = '$userAddress' WHERE user_id = '$userId'"; 

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}

