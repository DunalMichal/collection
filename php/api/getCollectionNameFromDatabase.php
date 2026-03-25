<?php
function getCollectionName()
{
    global $servername, $username, $password, $dbname;


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT DISTINCT Name FROM collections ORDER BY Name ASC";
    $result = $conn->query($sql);

    $collectionNames = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $collectionNames[] = $row['Name'];
        }
    }

    $conn->close();

    return $collectionNames;
}