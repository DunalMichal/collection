<?php

function getUserCardsFromDatabase($selectedCollectionID): array
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $sql = "SELECT cardDetailID, cardsCount, cardsForSale, lookingFor
FROM users_cards, cards_details, cards_collections
WHERE userID = ? AND collectionID = ? AND users_cards.cardDetailID = cards_details.ID AND cards_details.CardID = cards_collections.CardID";




    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $_SESSION["ID"], $selectedCollectionID);
    $stmt->execute();

    $result = $stmt->get_result();
    $cards = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();
    $conn->close();



    return $cards;
}

