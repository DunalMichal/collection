<?php

require "connect.php";

session_start();

print_r($_POST);


loginUser();
function loginUser()
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT ID, Name, Email, Nick, Password FROM users WHERE Email=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_POST['userEmail']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if($row && password_verify($_POST['userPass'], $row['Password'])) {
        $_SESSION["ID"]=$row['ID'];
        $_SESSION["Name"]=$row['Name'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["Nick"]=$row['Nick'];
    }else{
        echo"nie poprawny użytkownik lub haslo";
    }
    print_r($row);
    $stmt->close();
    $conn->close();

    header("Location: http://".$_SERVER["SERVER_NAME"]."/userPage.php");
}

