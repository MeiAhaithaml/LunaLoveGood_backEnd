<?php
include '../connection.php';

$minAverage = 30;
$limitFlower =20;

$sqlQuery = " Select * FROM items_table WHERE countBuy>= '$minAverage' ORDER BY  countBuy DESC LIMIT $limitFlower ";
                                                                                      // phan nay de chi co 5 loai san pham moi nhat moi de len thoi.
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
