<?php

function getCardsCollectionsWithUserStats($collectionID) {

    $cardsCategories = getCardsFromDatabase($collectionID);
    $userCards = getUserCardsFromDatabase($collectionID);

    $results = [];
    foreach ($cardsCategories as $cardCategory) {
        $row = [];
        $found = false;
        foreach ($userCards as $userCard) {
            if ($cardCategory['cardDetailID'] == $userCard['cardDetailID']) {
                $found = true;
                $row["cardDetailID"] = $cardCategory['cardDetailID'];
                $row["cardID"] = $cardCategory['CardID'];
                $row["ID"] = $cardCategory['ID'];
                $row["name"] = $cardCategory['Name'];
                $row["typeName"] = $cardCategory['TypeName'];
                $row["variantName"] = $cardCategory['VariantName'];
                $row["variantID"] = $cardCategory['VariantID'];
                $row["cardUniqueId"] = $cardCategory['cardUniqueID'];
                $row["cardNumberInCollectionID"] = $cardCategory['CardNumberInCollectionID'];
                $row["cardsCount"] = $userCard['cardsCount'];
                $row["cardsForSale"] = $userCard['cardsForSale'];
                $row["lookingFor"] = $userCard['lookingFor'];
                break;
            }
        }
        if ($found === false) {
            $row["cardDetailID"] = $cardCategory['cardDetailID'];
            $row["cardID"] = $cardCategory['CardID'];
            $row["ID"] = $cardCategory['ID'];
            $row["name"] = $cardCategory['Name'];
            $row["typeName"] = $cardCategory['TypeName'];
            $row["variantName"] = $cardCategory['VariantName'];
            $row["variantID"] = $cardCategory['VariantID'];
            $row["cardUniqueId"] = $cardCategory['cardUniqueID'];
            $row["cardNumberInCollectionID"] = $cardCategory['CardNumberInCollectionID'];
            $row["cardsCount"] = 0;
            $row["cardsForSale"] = 0;
            $row["lookingFor"] = 0;
        }
        $results[] = $row;
    }
//    echo "<pre>";
//    print_r($results);
//    echo "</pre>";
    return $results;

}

