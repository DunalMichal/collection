<?php

function getCollectionData($collectionID)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT cards.ID, cards.Name, types_of_cards.Name AS TypeName, cards_variants.Name AS VariantName, cards_collections.cardUniqueID
FROM cards, types_of_cards, cards_variants, cards_cards_variants, cards_collections
WHERE cards.TypeID = types_of_cards.ID AND cards.ID = cards_cards_variants.cardID AND cards_cards_variants.variantID = cards_variants.ID AND cards.ID = cards_collections.cardID AND cards_variants.ID = cards_collections.variantID AND cards_collections.CollectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $collectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $conn->close();

    return $result->fetch_all(MYSQLI_ASSOC);
}
