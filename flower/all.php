<?php
include '../connection.php';

$sqlQuery = " Select * FROM items_table ORDER BY item_id DESC ";
                                                                                      
$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0)  
{
    $FlowerItemRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $FlowerItemRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "flowerData"=>$FlowerItemRecord,
        )
    );
}
else 
{
    echo json_encode(array("success"=>false));
}
