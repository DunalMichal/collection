<?php

function getCardsFromDatabase($selectedCollectionID): array
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $sql = "SELECT cards.ID, cards.Name, types_of_cards.Name AS TypeName, cards_variants.Name AS VariantName, cards_collections.cardUniqueID, cards_collections.CardNumberInCollectionID, cards_collections.CardID
FROM cards, types_of_cards, cards_variants, cards_collections, cards_cards_variants
WHERE cards.TypeID = types_of_cards.ID AND cards.ID = cards_collections.cardID AND cards_collections.CardID = cards_cards_variants.cardID AND cards_cards_variants.variantID = cards_variants.ID AND cards_collections.CollectionID = ?
ORDER BY cards_collections.CardNumberInCollectionID";




    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $selectedCollectionID);
    $stmt->execute();

    $result = $stmt->get_result();
    $cards = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();
    $conn->close();

    return $cards;
}


