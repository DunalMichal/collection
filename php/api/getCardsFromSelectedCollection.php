<?php
function getCardsFromSelectedCollection($selectedCollectionID)

{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

// Poprawione zapytanie (usuń ten znak `=?` w WHERE)
    $sql = "SELECT cards_collections.CardID, cards_collections.CollectionID, collections.Name
FROM cards_collections
JOIN collections ON cards_collections.CollectionID = collections.ID
WHERE cards_collections.CollectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $selectedCollectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $cards = []; // tutaj będziemy zbierać wyniki
    while ($row = $result->fetch_assoc()) {
        $cards[] = $row;
    }

    $stmt->close();
    $conn->close();

    return $cards; // <-- bardzo ważne!
}
