<?php

function getCardsByVariantFromDatabase(
    int $collectionID,
    int $variantID
): array
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $dbname
    );

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "
      SELECT
    cards.*,
    cards_collections.CardUniqueID,
    cards_collections.CardNumberInCollectionID,
    cards_details.CardVariantID,
    cards_details.CardLimitID,
    cards_details.RelicID,
    attributes.Name AS AttributeName,
    attributes_values.Value AS AttributeValue

FROM cards

INNER JOIN cards_collections
    ON cards_collections.CardID = cards.ID

INNER JOIN cards_details
    ON cards_details.CardID = cards.ID

LEFT JOIN cards_attributes
    ON cards_attributes.CardID = cards.ID

LEFT JOIN attributes
    ON attributes.ID = cards_attributes.AttributeID

LEFT JOIN attributes_values
    ON attributes_values.ID = cards_attributes.ValueID

WHERE cards_collections.CollectionID = ?
AND cards_details.CardVariantID = ?

ORDER BY cards_collections.CardNumberInCollectionID ASC
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ii",
        $collectionID,
        $variantID
    );

    $stmt->execute();

    $result = $stmt->get_result();

    $rows = $result->fetch_all(MYSQLI_ASSOC);

    $cards = [];

    foreach ($rows as $row) {

        $cardID = $row['ID'];

        /*
         * Jeżeli karta jeszcze nie istnieje
         * w wynikowej tablicy, dodaj ją
         */
        if (!isset($cards[$cardID])) {

            $cards[$cardID] = [
                'ID' => $row['ID'],
                'Name' => $row['Name'],
                'TypeID' => $row['TypeID'],
                'CardUniqueID' => $row['CardUniqueID'],
                'CardNumberInCollectionID' => $row['CardNumberInCollectionID'],
                'CardVariantID' => $row['CardVariantID'],
                'CardLimitID' => $row['CardLimitID'],
                'RelicID' => $row['RelicID'],

                'Attributes' => []
            ];
        }

        /*
         * Dodaj atrybut karty
         */
        if (
            !empty($row['AttributeName'])
            && $row['AttributeValue'] !== null
        ) {
            $cards[$cardID]['Attributes'][$row['AttributeName']]
                = $row['AttributeValue'];
        }
    }

    $stmt->close();
    $conn->close();

    /*
     * Usuwamy indeksowanie po CardID
     */
    return array_values($cards);
}