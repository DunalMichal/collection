<?php
function getTableData(string $tableName): array {

global $servername, $username, $password, $dbname;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT * FROM `$tableName`";
$result = $conn->query($sql);

$data = [];
if ($result && $result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$data[] = $row;
}
}

$conn->close();
return $data;
}
