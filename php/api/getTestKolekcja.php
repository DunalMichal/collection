<?php

function testKolekcja(){

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
    }

    $sql = "SELECT * FROM collections ORDER BY id ASC";
    $result = $conn->query($sql);

    $collections = [];

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $collections[] = $row;
        }
    }


    $conn->close();
    return $collections;
}
