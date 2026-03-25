<?php

function getAttributesFromActiveCollection($selectedCollectionID)
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT attributes.ID, attributes.Name
FROM attributes, collection_attributes
WHERE attributes.ID = collection_attributes.attributesID AND collection_attributes.collectionID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $selectedCollectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $stmt->close();
    $conn->close();

    return $result ->fetch_all(MYSQLI_ASSOC);

}
