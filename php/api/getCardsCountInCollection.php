<?php
function getCardsCountInCollection(int $collectionID): int {
    global $servername, $username, $password, $dbname;

    // Połączenie z bazą
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    // SQL: liczymy wszystkie karty w kolekcji
    $sql = "SELECT COUNT(*) AS totalCards FROM cards_collections WHERE CollectionID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $collectionID);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = (int) $row['totalCards'];

    // Zamykamy połączenie
    $stmt->close();
    $conn->close();

    return $count;

    }