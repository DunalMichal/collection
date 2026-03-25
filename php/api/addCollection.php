<?php
require "connect.php";
require "addCollectionFull.php";


//addCollection();
addCollectionFull();


function addCollection()
{

    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO collections (Name, Publisher, YearOfPublish, CardsCount, Description)value (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $_POST['Name'], $_POST['Publisher'],$_POST['YearOfPublish'], $_POST['CardsCount'], $_POST['Description']);
    $stmt->execute();
    $collectionID = $conn->insert_id;

    $stmt->close();
    $conn->close();
    print_r($_POST["categories"]);

//    header("Location: http://".$_SERVER["SERVER_NAME"]."/userPage.php");
}

//przejsc petla foraeach po wszystkie $_Postp(categories)
//    dodać do tabeli bazy dacny hkategori collections pary collection ID, konkretny element z tabeli post categoryy
