<?php
header('Content-Type: application/json');
include '../connection.php';

//POST = send/save data to mysql db
//GET = retrieve/read data from mysql db

$typeKeyWord = $_POST['typeKeyWord'];


$sqlQuery = "SELECT * FROM items_table WHERE name LIKE '%$typeKeyWord%' ";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0) //allow user to login 
{
    $foundProductRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $foundProductRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "foundProductData"=>$foundProductRecord,
        )
    );
}
else 
{
    echo json_encode(array("success"=>false));
}
