<?php
include '../connection.php';

$userEmail = $_POST['user_phone'];

$sqlQuery = "SELECT * FROM users_table WHERE user_phone='$userEmail'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0) 
{
    echo json_encode(array("emailFound"=>true));
}
else
{

    echo json_encode(array("emailFound"=>false));
}



