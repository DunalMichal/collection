<?php

include "connect.php";

header('Content-Type: application/json; charset=utf-8');


global $servername, $username, $password, $dbname;

$json = file_get_contents('php://input');

$data = json_decode($json, true);

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "
    SELECT
        cards_details.ID as cardDetailID,
        cards.ID,
        cards_collections.CardID,
        cards.Name,
        types_of_cards.Name AS TypeName,
        cards_variants.Name AS VariantName,
        cards_variants.ID AS VariantID,
        cards_collections.CardUniqueID AS CardUniqueID,
        cards_collections.CardNumberInCollectionID,
        cards_attributes.ValueID,
        attributes_values.Value AS AttributeValue,
        attributes_values.AttributeID AS AttributeCategoryID
    FROM cards
    INNER JOIN types_of_cards
        ON cards.TypeID = types_of_cards.ID
    INNER JOIN cards_collections
        ON cards.ID = cards_collections.cardID
    INNER JOIN cards_details
        ON cards_collections.CardID = cards_details.CardId
    INNER JOIN cards_variants
        ON cards_details.CardVariantID = cards_variants.ID
    INNER JOIN cards_attributes
        ON cards.ID = cards_attributes.cardID
    INNER JOIN attributes_values
        ON cards_attributes.ValueID = attributes_values.ID
    WHERE cards_collections.CollectionID = ? AND attributes_values.AttributeID = cards_attributes.AttributeID

    ";

$types = "i";
$params = [$data["collectionID"]];

// Filtr nazwy
//if (!empty($filters['name'])) {
//    $sql .= " AND cards.Name LIKE ?";
//    $types .= "s";
//    $params[] = "%" . $filters['name'] . "%";
//}

// Filtr wariantu
if (!empty($data['cardVariant'])) {
    $sql .= " AND cards_details.CardVariantID = ?";
    $types .= "i";
    $params[] = $data['cardVariant'];
}

// Filtr typu karty
if (!empty($data['cardType'])) {
    $sql .= " AND cards.TypeID = ?";
    $types .= "i";
    $params[] = $data['cardType'];
}
// Filtr drużyny/kraju
if (!empty($data['attributes'])) {
    foreach ($data['attributes'] as $attribute) {

        if(!empty($attribute["value"])){
            $sql .= " AND cards_attributes.ValueID = ?";
            $types .= "i";
            $params[] = $attribute['value'];
        }
    }
}


$sql .= " ORDER BY cards_collections.CardNumberInCollectionID";

$stmt = $conn->prepare($sql);
$stmt->bind_param($types, ...$params);
$stmt->execute();

$result = $stmt->get_result();

$cards=[];
$addedCardsID = [];

foreach ($result as $row) {
    if(!in_array($row["CardID"], $addedCardsID)){
        $addedCardsID[] = $row["CardID"];
        $newCard = $row;
        $newCard["Attributes"] = [["AttributeID"=>$row["ValueID"],"AttributeValue"=>$row["AttributeValue"], "AttributeCategoryID"=>$row["AttributeCategoryID"]] ];
        $newCard["Variants"] =[["VariantID"=>$row["VariantID"], "VariantValue"=>$row["VariantName"]]];
        $cards[] = $newCard;
    }else{
        foreach ($cards as &$card) {
            if($card["CardID"] == $row["CardID"]){
                $attributeDiscovered = false;
                foreach ($card["Attributes"] as $attribute) {
                    if ($attribute["AttributeID"] == $row["ValueID"]) {
                        $attributeDiscovered = true;
                    }
                }
                // dokończyc warianty
                if (!$attributeDiscovered) {
                    $card["Attributes"][] = ["AttributeID"=>$row["ValueID"],"AttributeValue"=>$row["AttributeValue"], "AttributeCategoryID"=>$row["AttributeCategoryID"]];
                }
                $newCard["Variants"][] =[["VariantID"=>$row["VariantID"], "VariantValue"=>$row["VariantName"]]];
                unset($card);
                break;
            }
        }
    }
}
$stmt->close();
$conn->close();


echo json_encode($cards);
