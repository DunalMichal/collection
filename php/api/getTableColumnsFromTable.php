<?php
function getCardColumnsFromTable($collectionID): array {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = ? -- nazwa bazy danych
      AND TABLE_NAME = ?   -- nazwa tabeli
    ORDER BY ORDINAL_POSITION
";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $collectionID);
    $stmt->execute();
    $result = $stmt->get_result();

    $columns = [];
    while ($row = $result->fetch_assoc()) {
        $columns[] = $row['ColumnName'];
    }

    $stmt->close();
    $conn->close();

    return $columns;
}
