<?php

function getCard($id)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT cards.Name, cards.Type, cards.LimitCapacity, cards.LimitNumber, cards_collections.CardUniqueID
    FROM cards, cards_collections
    WHERE cards.ID = cards_collections.cardID AND cards.ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $row = [];

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    }
    $stmt->close();
    $conn->close();

    return $row;
}
//"SELECT * FROM cards WHERE ID = ?";