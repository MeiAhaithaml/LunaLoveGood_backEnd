<?php
include '../connection.php';

$limitFlower = 20;
$tagName = $_POST['tag_name']; 
$sqlQuery = "SELECT * FROM items_table
             WHERE tag LIKE '%$tagName%'
             LIMIT $limitFlower";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery->num_rows > 0)  
{
    $flowerItemRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc())
    {
        $flowerItemRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "flowerData" => $flowerItemRecord,
        )
    );
}
else 
{
    echo json_encode(array("success" => false));
}

