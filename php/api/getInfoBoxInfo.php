<?php
require_once __DIR__ . '/../components/infoBox.php'; // wczytanie komponentu

global $servername, $username, $password, $dbname;


$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

/**
 * Pobiera dane dla danej kategorii i wywołuje infoBox
 */
function showInfoBoxByCategory($category) {
    global $mysqli;

    $stmt = $mysqli->prepare("SELECT title, description FROM test WHERE category = ?");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    $parameters = [];
    $titleBox = ucfirst(str_replace('_', ' ', $category)); // np. "nowe_karty" → "Nowe karty"

    while ($row = $result->fetch_assoc()) {
        $parameters[] = $row['description']; // opis jako element infoBox
    }

    if (!empty($parameters)) {
        generate_infoBox($titleBox, $parameters); // wywołanie komponentu
    }

    $stmt->close();
}
?>
