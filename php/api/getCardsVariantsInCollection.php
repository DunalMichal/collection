<?php

function getCardsVariantsInCollection($selectedCollectionID)
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT variantID, collectionID, Name
    FROM cards_variants_in_collections, cards_variants
    WHERE collectionID = ?
    AND cards_variants.ID = cards_variants_in_collections.variantID";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $selectedCollectionID);
    $stmt->execute();

    $result = $stmt->get_result();

    $variants = [];

    while ($row = $result->fetch_assoc()) {
        $variants[] = $row;
    }

    $stmt->close();
    $conn->close();

    return $variants;
}