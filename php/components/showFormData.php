<?php
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Dane z formularza</title></head><body>";
echo "<h2>Dane z formularza:</h2>";

if(empty($_POST)) {
    echo "<p>Brak danych do wyświetlenia!</p>";
} else {
    echo "<table border='1' cellpadding='5' cellspacing='0'><tr><th>Pole</th><th>Wartość</th></tr>";
    foreach($_POST as $key => $value) {
        echo "<tr><td>".htmlspecialchars($key)."</td><td>".htmlspecialchars($value)."</td></tr>";
    }
    echo "</table>";
}

echo "<br><a href='../index.php'>Wróć do formularza</a>";
echo "</body></html>";
