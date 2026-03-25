<?php

function getCardCategoriesInCollection($selectedCollectionID)
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Attributes_values.ID, Attributes_values.Value
FROM Collection_attributes, Attributes_values
WHERE Collection_attributes.attributesID = Attributes_values.AttributeID
  AND Collection_attributes.collectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $selectedCollectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $cardTypeInCollection = $result->fetch_all(MYSQLI_ASSOC);


    $conn->close();
    return $cardTypeInCollection;

}

