<?php

function getCardVariantsInCollection($collectionID)
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT cards_variants.ID, Name 
From cards_variants, cards_variants_in_collections
WHERE cards_variants.ID = cards_variants_in_collections.variantID AND cards_variants_in_collections.collectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $collectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $cardVariantsInCollection = $result->fetch_all(MYSQLI_ASSOC);


    $conn->close();
    return $cardVariantsInCollection;

}


