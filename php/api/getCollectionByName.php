<?php

if (!isset($_GET['name']) || empty($_GET['name'])) {
    echo json_encode([]);
    exit;
}

$name = $_GET['name'];

// Połączenie do bazy dokładnie jak w Twojej funkcji getTableData()
global $servername, $username, $password, $dbname;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Zabezpieczenie przed SQL Injection
$name_safe = $conn->real_escape_string($name);

// Pobranie danych kolekcji po nazwie
$sql = "SELECT * FROM collections WHERE name = '$name_safe' LIMIT 1";
$result = $conn->query($sql);

$data = [];
if ($result && $result->num_rows > 0) {
    $data = $result->fetch_assoc();
}

// Zwracamy JSON
echo json_encode($data);

// Zamknięcie połączenia
$conn->close();
?>