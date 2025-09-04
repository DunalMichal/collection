<?php


function getTableData()
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $sql = "select cards_collections.CardUniqueID, cards.Name, collections.Name as CollectionName, collections.Publisher 
    FROM cards_collections, cards, collections
    WHERE cards_collections.CollectionID = collections.ID AND cards_collections.CardID = cards.ID";
    $stmt = $conn->prepare($sql);
//    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $finalArray = [];

    while ($row = $result->fetch_assoc()) {
        $finalArray[] = $row;

    }
    $stmt->close();
    $conn->close();

    return $finalArray;

}
