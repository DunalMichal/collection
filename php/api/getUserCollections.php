<?php
function getUserCollections($userId) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "collection";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT DISTINCT collectionID
            FROM users_collections
            WHERE userID = ?
            ORDER BY collectionID DESC";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    $collections = [];
    while ($row = $result->fetch_assoc()) {
        $collections[] = $row['collectionID'];
    }

    $stmt->close();
    $conn->close();

    return $collections;
}
