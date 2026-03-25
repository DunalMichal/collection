<?php

function getCollectionFieldFromDataBase()
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query("SHOW COLUMNS FROM collections");
    $fields = [];

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $fields[] = [
                'name' => $row['Field'],
                'type' => $row['Type']
            ];
        }

    }
    $conn->close();
    return $fields;
}
