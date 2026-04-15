<?php

function getCollectionInfo($id)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT ID, Name, Publisher, YearOfPublish, CardsCount, Description
            FROM collections
            WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $row = $result->fetch_assoc();

    $stmt->close();
    $conn->close();


    return $row;

}
