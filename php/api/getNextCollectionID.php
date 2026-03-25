<?php

function getNextCollectionID()
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT MAX(id) AS last_id FROM collections";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        $lastID = (int)$row['last_id'];
        $nextID = $lastID + 1;
    } else {
        $nextID = 1;
    }

    $conn->close();

    return $nextID;
}


