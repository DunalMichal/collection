<?php
function getRandomCardFromDataBase()
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM cards ORDER BY RAND() LIMIT 1";


    $result = $conn->query($sql);

    $cardTypeInCollection = $result->fetch_all(MYSQLI_ASSOC);


    $conn->close();
    return $cardTypeInCollection;

}
