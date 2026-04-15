<?php

function getCollections($id)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT cards_collections.CardUniqueID, cards.Name, 'barcelona' as Team
FROM cards, cards_collections
WHERE cards.ID = cards_collections.CardID AND cards_collections.CollectionID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $finalArray = [];

    while($row = $result->fetch_assoc()) {
        $finalArray[] = $row;

    }
    $stmt->close();
    $conn->close();

    return $finalArray;

}
