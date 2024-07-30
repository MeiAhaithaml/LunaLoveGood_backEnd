<?php
header('Content-Type: application/json');
include '../connection.php';

//POST = send/save data to mysql db
//GET = retrieve/read data from mysql db

$userEmail = $_POST['user_phone'];
$userPassword = md5($_POST['user_password']); 

$sqlQuery = "SELECT * FROM users_table WHERE user_phone = '$userEmail' AND user_password = '$userPassword'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0) //allow user to login 
{
    $userRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $userRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "userData"=>$userRecord[0],
        )
    );
}
else 
{
    echo json_encode(array("success"=>false));
}
