<?php
include '../connection.php';
$itemName = $_POST['name'];
$itemAverage = $_POST['average'];
$itemInventory = $_POST['inventory'];
$itemTag = $_POST['tag']; 
$itemSizes = $_POST['sizes'];
$itemDescription = $_POST['description'];
$itemPrice = $_POST['price']; 
$itemImage = $_POST['image'];
$itemCountBuy = $_POST['countBuy'];

$sqlQuery = "INSERT INTO items_table SET name = '$itemName', average = '$itemAverage', inventory = '$itemInventory', tag = '$itemTag', sizes = '$itemSizes', description = '$itemDescription', price = '$itemPrice', image = '$itemImage', countBuy='$itemCountBuy'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}