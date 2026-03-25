<?php

function getCardsAmount($id){

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT users.ID, users.Name, users.Surname, users.Email, users.Nick 
    FROM users
    WHERE users.ID = ?";

    $sql = "SELECT count(*) as CardsCount FROM card_list WHERE card_list.userID = ? AND card_list.Status = 'have'";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $row = [];

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    }
    $stmt->close();
    $conn->close();

    return $row["CardsCount"];

}
