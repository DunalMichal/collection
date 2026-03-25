<?php
function addCollectionFull()
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// 1. Dodaj kolekcję
    $sql = "INSERT INTO collections (Name, Publisher, YearOfPublish, CardsCount, Description) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssss",
        $_POST['Name'],
        $_POST['Publisher'],
        $_POST['YearOfPublish'],
        $_POST['CardsCount'],
        $_POST['Description']
    );
    $stmt->execute();
    $collectionID = $conn->insert_id;
    $stmt->close();

    // 2. Dodaj powiązania z kategoriami
    if (!empty($_POST['categories']) && is_array($_POST['categories'])) {
        $sqlCat = "INSERT INTO collections_categories (CollectionID, CategoryID) VALUES (?, ?)";
        $stmtCat = $conn->prepare($sqlCat);

        foreach ($_POST['categories'] as $categoryID) {
            // Dodaj kategorię wybraną przez użytkownika
            $stmtCat->bind_param("is", $collectionID, $categoryID);
            $stmtCat->execute();
        }
        $stmtCat->close();
    }

    // 3. Dodaj powiązania z typami Kart  00 Collections == Card Types
    if (!empty($_POST['types']) && is_array($_POST['types'])) {
        $sqlType = "INSERT INTO types_of_cards_in_collections (CollectionID, typeID) VALUES (?, ?)";
        $stmtType = $conn->prepare($sqlType);

        foreach ($_POST['types'] as $typeID) {
            // Dodaj kategorię wybraną przez użytkownika
            $stmtType->bind_param("is", $collectionID, $typeID);
            $stmtType->execute();
        }
        $stmtType->close();
    }
    // 4. Dodaj powiązania z Variantmi Kart
    if (!empty($_POST['variants']) && is_array($_POST['variants'])) {
        $sqlVariant = "INSERT INTO cards_variants_in_collections (CollectionID, variantID) VALUES (?, ?)";
        $stmtVariant = $conn->prepare($sqlVariant);

        foreach ($_POST['variants'] as $variantID) {
            // Dodaj kategorię wybraną przez użytkownika
            $stmtVariant->bind_param("is", $collectionID, $variantID);
            $stmtVariant->execute();
        }
        $stmtVariant->close();
    }
    // 4. Dodaj powiązania z Atrybutami Kart
    if (!empty($_POST['attributes']) && is_array($_POST['attributes'])) {
        $sqlAttr = "INSERT INTO collection_attributes (collectionID, attributesID) VALUES (?, ?)";
        $stmtAttr = $conn->prepare($sqlAttr);

        foreach ($_POST['attributes'] as $attributeID) {
            // Dodaj kategorię wybraną przez użytkownika
            $stmtAttr->bind_param("is", $collectionID, $attributeID);
            $stmtAttr->execute();
        }
        $stmtAttr->close();
    }



    echo "Kolekcja dodana pomyślnie!";
    $conn->close();
}


