<?php
include '../connection.php';
$currentOnlineUserID =$_POST["currentOnlineUserID"];

$sqlQuery = "SELECT * FROM users_table WHERE user_id = '$currentOnlineUserID'";
$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0) 
{
    $userRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $userRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "currentUserRecord"=>$orderRecord,
        )
    );
}
else 
{
    echo json_encode(array("success"=>false));
}
