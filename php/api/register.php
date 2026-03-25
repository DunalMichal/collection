<?php
require "connect.php";

print_r($_POST);

setUser();
function setUser()
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $passwordHash = password_hash($_POST["userPass"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO USERS (Name, Email, Password)values (?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $_POST['userName'], $_POST['userEmail'], $passwordHash);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: http://".$_SERVER["SERVER_NAME"]."/userPage.php");
}
