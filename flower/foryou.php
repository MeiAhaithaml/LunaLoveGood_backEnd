<?php
include '../connection.php';

$minAverage = 4.0;
$limitFlower =20;

$sqlQuery = " Select * FROM items_table WHERE average>= '$minAverage' ORDER BY  average DESC LIMIT $limitFlower ";
                                                                                      
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
