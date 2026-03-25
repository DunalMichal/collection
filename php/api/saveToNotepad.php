<?php

header("Content-Type: text/plain; charset=utf-8");

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo "Brak danych do zapisania!";
    exit;
}

$file = __DIR__ . "/notatnik.txt";
$content = "===== Nowy wpis =====\n";
$content .= "Data: " . date("Y-m-d H:i:s") . "\n";

foreach ($data as $key => $value) {
    $content .= "$key: $value\n";
}

$content .= "\n-----------------------\n\n";

file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

echo "✅ Dane zapisane do notatnika!";
