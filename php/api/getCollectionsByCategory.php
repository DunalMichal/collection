<?php

function getCollectionsByCategory($id)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT  collections.ID, collections.Name, collections.Publisher, collections.YearOfPublish, collections.cardsCount, collections.Description from collections, collections_categories
where collections.ID = collections_categories.CollectionID and collections_categories.CategoryID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $finalArray = [];

    while($row = $result->fetch_assoc()) {
        $finalArray[] = $row;

    }
    $stmt->close();
    $conn->close();

    return $finalArray;

}
