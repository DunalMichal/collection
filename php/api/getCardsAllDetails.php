<?php

function getCardDetails($cardID) {

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "
        SELECT
            cards_details.CardVariantID,
            cards_details.CardLimitID,
            cards_details.RelicID,
            cards_variants.Name AS VariantName,
            cards_limits.LimitType AS LimitType,
            cards_relics.Name AS RelicName
        FROM cards_details
        INNER JOIN cards_variants
            ON cards_variants.ID = cards_details.CardVariantID
        INNER JOIN cards_limits
            ON cards_limits.ID = cards_details.CardLimitID
        INNER JOIN cards_relics
            ON cards_relics.ID = cards_details.RelicID
        WHERE cards_details.CardID = ?
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $cardID);

    $stmt->execute();

    $result = $stmt->get_result();

    $details = [];

    while ($row = $result->fetch_assoc()) {
        $details[] = $row;
    }

    $stmt->close();
    $conn->close();

    return [
        "CardID" => $cardID,
        "details" => $details
    ];
}
