<?php

function getCardTypesInCollection($collectionID)
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT types_of_cards.ID, Name 
From types_of_cards, types_of_cards_in_collections
WHERE types_of_cards.ID = types_of_cards_in_collections.typeID AND types_of_cards_in_collections.collectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $collectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $cardTypeInCollection = $result->fetch_all(MYSQLI_ASSOC);


    $conn->close();
    return $cardTypeInCollection;

}

