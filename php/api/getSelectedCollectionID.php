<?php

function getSelectedCollectionID() {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ID
            FROM collections";

    $result = $conn->query($sql);

    $selectedCollectionID = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $selectedCollectionID[] = $row;
        }
    }

    $conn->close();

    return $selectedCollectionID;
}

