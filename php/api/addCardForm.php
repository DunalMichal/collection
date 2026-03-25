
<?php
include "connect.php";

print_r($_POST);

global $servername, $username, $password, $dbname;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "INSERT INTO cards (name, typeID) VALUES (?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $_POST['card_name'], $_POST['card_type'] );
$stmt->execute();

$sql = "INSERT INTO cards_collections (CollectionID, CardID, CardUniqueID, CardNumberInCollectionID) values (?, ?, ?, ?)";

$lastCardIDinDataBase = $conn->insert_id;
$stmt = $conn->prepare($sql);
$stmt->bind_param("iisi", $_POST['selected_collection_ID'], $lastCardIDinDataBase, $_POST['unique_card_number_in_collection'], $_POST['card_number_in_collection']);
$stmt->execute();

$sql = "INSERT INTO cards_cards_variants (cardID, variantID) VALUES (?,?)";
$stmt = $conn->prepare($sql);

foreach ($_POST['card_variants_parallel-noLimit'] as $cardVariant){
    $stmt->bind_param("ii", $lastCardIDinDataBase, $cardVariant);
    $stmt->execute();
}

foreach ($_POST as $key => $value) {
    if (str_starts_with($key, "card_attribute_")){
        $newKey = substr($key, strlen("card_attribute_"));

    $sql = "INSERT INTO cards_attributes (cardID, attributeID, Value) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("iii", $lastCardIDinDataBase, $newKey, $value);
    $stmt->execute();
    }
}
//$sql = "INSERT INTO cards_collections (CardCollectionID) VALUES (?)";
//$sql = "INSERT INTO cards_collections (CardUniqueID) VALUES (?)";


//przejsc przez wszystkie warianty i dodac wariantu do ostatniej dodanej karty,
// to samo z limitami
// komenda to pobierania ostatnio dodanego id do bazy danych
