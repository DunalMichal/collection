<?php

function getCollections($id)
{
    global $servername, $username, $password, $dbname;



    $sql = "SELECT cards_collections.CardUniqueID, cards.Name, 'barcelona' as Team, cards.Type,  cards.LimitCapacity, cards.LimitNumber
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
