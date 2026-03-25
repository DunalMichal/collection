<?php

function getCollectionsCategories() {

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT CollectionID, CategoryID from collections_categories";

    $result = $conn->query($sql);
    $collections_categories = [];

    if($result) {
        while ($row = $result->fetch_assoc()) {
            $collections_categories[] = $row;
        }
    }

    $conn->close();
    return $collections_categories;

}
