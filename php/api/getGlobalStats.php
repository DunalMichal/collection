<?php
function getGlobalStats() {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "collection";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $checkColumn = $conn->query("SHOW COLUMNS FROM users LIKE 'last_activity'");
    $hasLastActivity = $checkColumn->num_rows > 0;

    // Budujemy zapytanie SQL
    $sql = "
        SELECT
            (SELECT COUNT(*) FROM users) as users,
            " . ($hasLastActivity ? "(SELECT COUNT(*) FROM users WHERE last_activity > NOW() - INTERVAL 5 MINUTE)" : "0") . " as online,
            (SELECT COUNT(*) FROM cards) as cards,
            (SELECT COUNT(*) FROM collections) as collections
    ";

    $result = $conn->query($sql);
    $stats = $result ? $result->fetch_assoc() : [
        'users' => 0,
        'online' => 0,
        'cards' => 0,
        'collections' => 0
    ];

    $conn->close();

    return $stats;
}