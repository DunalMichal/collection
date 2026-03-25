<?php

function getLastCardNumber($tableName){

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $sql ="SELECT ID
FROM $tableName
ORDER by ID DESC
Limit 1";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result();
    $lastCardNumber = $result->fetch_assoc()["ID"];

    $stmt->close();
    $conn->close();

    return $lastCardNumber;

}