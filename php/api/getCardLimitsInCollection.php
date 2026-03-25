<?php

function getCardLimitsInCollection($collectionID)
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT cards_limits.ID, cards_limits.LimitType 
From cards_limits, cards_limits_in_collections
WHERE cards_limits.ID = cards_limits_in_collections.limitID AND cards_limits_in_collections.collectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $collectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $cardLimitsInCollection = $result->fetch_all(MYSQLI_ASSOC);


    $conn->close();
    return $cardLimitsInCollection;

}
