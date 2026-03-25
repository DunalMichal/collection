<?php
function getCardCategory($collectionID)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Value 
FROM cards_attributes
WHERE collectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('', $collectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $toCollect = null;
    if ($row = $result->fetch_assoc()) {
        $toCollect = $row['ToCollect'];
    }

    $stmt->close();
    $conn->close();

    return $toCollect;
}
