<?php


function getCardsFromDatabaseSimple($selectedCollectionID): array
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

   $sql = "SELECT cards.ID, cards.Name, types_of_cards.Name AS TypeName, cards_variants.Name AS VariantName, cards_collections.cardUniqueID, cards_collections.CardCollectionID
FROM cards, types_of_cards, cards_variants, cards_cards_variants, cards_collections
WHERE cards.TypeID = types_of_cards.ID AND cards.ID = cards_cards_variants.cardID AND cards_cards_variants.variantID = cards_variants.ID AND cards.ID = cards_collections.cardID AND cards_variants.ID = cards_collections.variantID AND cards_collections.CollectionID = ?";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $selectedCollectionID);
    $stmt->execute();

    $result = $stmt->get_result();
    $cards = [];

    while ($row = $result->fetch_assoc()) {
        $cards[] = $row; // tylko dane
    }

    $stmt->close();
    $conn->close();

    return $cards;
}
