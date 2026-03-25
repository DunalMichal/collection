<?php

function insertCardIntoCollection($collectionID, $cardData)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $conn->begin_transaction(); // Transakcja, aby wszystko zapisało się razem

    try {
        // 1️⃣ Dodaj nową kartę do tabeli `cards`
        $stmt = $conn->prepare("INSERT INTO cards (Name, TypeID) VALUES (?, ?)");
        $stmt->bind_param("si", $cardData['name'], $cardData['typeID']);
        $stmt->execute();
        $cardID = $stmt->insert_id; // pobierz ID nowo dodanej karty
        $stmt->close();

        // 2️⃣ Dodaj rekord do tabeli `cards_collections`
        $stmt = $conn->prepare("INSERT INTO cards_collections 
            (CollectionID, CardID, CardCollectionID, cardUniqueID) 
            VALUES (?, ?, ?, ?)");
        $stmt->bind_param(
            "iiii",
            $collectionID,
            $cardID,
            $cardData['cardNumberInCollection'],
            $cardData['uniqueID']
        );
        $stmt->execute();
        $stmt->close();

        // 3️⃣ Dodaj wartości atrybutów do tabeli `cards_attributes_values`
        foreach ($cardData['attributes'] as $attributeID => $value) {
            $stmt = $conn->prepare("INSERT INTO attributes_values (AttributeID, Value) VALUES (?, ?)");
            $stmt->bind_param("iis", $cardID, $attributeID, $value);
            $stmt->execute();
            $stmt->close();
        }

        // 4️⃣ Dodaj warianty i limity
        foreach ($cardData['variants'] as $variantID => $limit) {
            $stmt = $conn->prepare("INSERT INTO cards_cards_variants
                (CardID, VariantID) VALUES (?, ?)");
            $stmt->bind_param("iii", $cardID, $variantID, $limit);
            $stmt->execute();
            $stmt->close();
        }

        $conn->commit();
    } catch (Exception $e) {
        $conn->rollback();
        echo "Błąd dodawania karty: " . $e->getMessage();
        return false;
    }

    $conn->close();
    return true;
}

