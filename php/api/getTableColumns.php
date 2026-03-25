<?php
function getTableColumns(string $tableName): array {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

    $columns = [];
    $sql = "SHOW COLUMNS FROM `$tableName`";
    $result = $conn->query($sql);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $columns[] = $row['Field'];
        }
    }

    $conn->close();
    return $columns;
}