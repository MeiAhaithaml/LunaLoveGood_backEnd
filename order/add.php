<?php
include '../connection.php';


$user_id = $_POST["user_id"];
$selectedProduct = $_POST["selectedProduct"];
$deliverySystem = $_POST["deliverySystem"];
$paymentSystem = $_POST["paymentSystem"];
$note = $_POST["note"];
$totalAmount = $_POST["totalAmount"];
$image = $_POST["image"];
$status = $_POST["status"];
$addressUser = $_POST["addressUser"];
$phoneUser = $_POST["phoneUser"];
$imageFileBase64 = $_POST["imageFile"];

$sqlQuery = "INSERT INTO order_table SET user_id = '$user_id', selectedProduct = '$selectedProduct', deliverySystem = '$deliverySystem', paymentSystem = '$paymentSystem', note = '$note', totalAmount = '$totalAmount', image = '$image', status = '$status', addressUser='$addressUser',phoneUser='$phoneUser'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
  $imageFileOfTransaction =   base64_decode($imageFileBase64);
    file_put_contents("../transaction_image/".$image,$imageFileOfTransaction);
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}