<?php
include '../connection.php';

$currentOnlineUserID = $_POST["currentOnlineUserID"];

$sqlQuery = "SELECT * FROM address_tables WHERE user_id = '$currentOnlineUserID'";
$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery->num_rows > 0) {
    $addressRecords = array();
    while ($row = $resultOfQuery->fetch_assoc()) {
        $addressRecords[] = $row;
    }

    echo json_encode(
        array(
            "success" => true,
            "currentUserAddressRecords" => $addressRecords,
        )
    );
} else {
    echo json_encode(array("success" => false));
}
?>
