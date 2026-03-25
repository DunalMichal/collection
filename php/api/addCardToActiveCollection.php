<?php
function addCardToActiveCollection($selectedCollectionID)
{
    $attributesList = getAttributesFromActiveCollection($selectedCollectionID);
    $cardsTypesInCollection = getCardTypesInCollection($selectedCollectionID);
    $cardsVariantsInCollection = getCardVariantsInCollection($selectedCollectionID);
    $cardsLimitsInCollection = getCardLimitsInCollection($selectedCollectionID);
    $lastCardNumber = getLastCardNumber("cards");


    $allCardsInCollection = getCardsFromDatabase($selectedCollectionID);

    $cardsAllAttributes = [];
    foreach ($attributesList as $attribute) {
        $cardsAttributesInCollection = getCardsAttributesValues($attribute['ID']);
        $cardsAttributes = [];
        foreach ($cardsAttributesInCollection as $cardsAttribute) {
            $cardsAttributes[] = array("ID" => $cardsAttribute["ID"], "Name" => $cardsAttribute["Value"]);
        }
        $cardsAllAttributes[$attribute['ID']] = $cardsAttributes;

    }


//print_r($cardsVariantsInCollection);
//    $cardsVariants = [];
//    foreach ($cardsVariantsInCollection as $cardVariant) {
//        $cardsVariants[] = $cardVariant["Name"];
//    }
    $cardsLimits = [];
    foreach ($cardsLimitsInCollection as $cardLimits) {
        $cardsLimits[] = array("ID" => $cardLimits["ID"], "Name" => $cardLimits["LimitType"]);
    }
//    print_r($cardsLimits);
//    $previousNumber = max(1, $currentNumber - 1);
//    $nextNumber = $currentNumber + 1;

//    formReadOnlyInput($previousNumber, "previousCard", "Poprzednia karta");
//    formReadOnlyInput($currentNumber, "currentCard", "Aktualna karta");
//    formReadOnlyInput($nextNumber, "nextCard", "Następna karta");

    ?>
    <form method="POST" action="/php/api/addCardForm.php">

        <?php
        formHiddenInput("selected_collection_ID", $selectedCollectionID);

        formReadOnlyInput($lastCardNumber+1, "currentCard", "Numer Karty W BD");

        formTextInput("card_number_in_collection", "Numer Karty W Kolekcji", true);
        formTextInput("unique_card_number_in_collection", "Unikatowy Numer", true);
        formTextInput("card_name", "Nazwa Karty Nazwa", true);

        foreach ($attributesList as $attribute) {
            formSelectInput("card_attribute_" . $attribute["ID"], $attribute["Name"], $cardsAllAttributes[$attribute['ID']], true);
        }
        formSelectInput("card_type", "Typ Karty", $cardsTypesInCollection, true);



        ?>
        <br>
        <?php
        formCheckBoxes("card_variants_parallel", "Wariant Karty - Parallel", $cardsVariantsInCollection, false, false, true, $cardsLimits);
        formCheckBoxes("card_variants_autograph", "Autograf", $cardsVariantsInCollection, false, false, false, $cardsLimits);
        formCheckBoxes("card_variants_relic", "Relic", $cardsVariantsInCollection, false, false, false, $cardsLimits);

//        formSelectInput("save_card", "Zapisz Karte", true, false);
//        formSelectInput("save_card", "Zapisz Karte", true, false);
//        formSelectInput("save_card", "Zapisz Karte", true, false);

//        echo "<pre>";
//        print_r(getCardsCollectLimits($selectedCollectionID, 1));
//        print_r(getCardsToCollectOverall($selectedCollectionID, 6));
//        echo "</pre>";
        ?>
        <br>
        <input type="submit" name="addMoreCard" value="Dodaj kolejną kartę">
        <br>
        <?php
//        addAdditionalSportCardInfo($selectedCollectionID);
//        addAdditionalTCGCardInfo($selectedCollectionID);
        ?>
    </form>
    <?php
}
