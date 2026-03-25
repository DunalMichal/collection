<?php

function getCollectionDataForBasicTable() {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Pobieramy wszystkie potrzebne kolumny
    $sql = "SELECT 
            cards.ID, 
            cards.Name, 
            cards_attributes.Value AS Team
        FROM cards
        LEFT JOIN cards_attributes 
            ON cards.ID = cards_attributes.CardID 
            AND cards_attributes.AttributeID = cards.Name";

    $result = $conn->query($sql);

    $data = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    $conn->close();

    return $data;
}