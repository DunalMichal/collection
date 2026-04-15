<?php
include "php/api/getCollectionsList.php";
include "php/api/getCollectionsCategories.php";
include "php/api/getSelectedCollectionID.php";
include "php/layouts/collectionPageCollectionDescription.php";
include "php/components/card_form_fields.php";



function generateAddCardForm()
{
    // Pobranie ID wybranej kolekcji
    $selectedCollectionID = $_POST['selectedCollectionID'] ?? null;

    // Pobranie listy kolekcji i kategorii
    $collectionsList = getCollectionsList() ?? [];
    $collectionsCategories = getCollectionsCategories() ?? [];
    $cards[] = getCardsFromSelectedCollection($selectedCollectionID);

    // Liczba nowych pól do dodania kart
    $newCardCount = $_POST['newCardCount'] ?? 3;

    // Obsługa przycisku "Dodaj kolejną kartę"
    if (isset($_POST['addMoreCard'])) {
        $newCardCount++;
    }


    // Wybrana kolekcja
    $selectedCollection = null;
    if ($selectedCollectionID && !empty($collectionsList)) {
        $selectedIndex = array_search($selectedCollectionID, array_column($collectionsList, 'ID'));
        if ($selectedIndex !== false) {
            $selectedCollection = $collectionsList[$selectedIndex];
        }
    }

    ?>

    <div class="main">
        <div class="main-inner">
            <?php
            getActiveCollection($selectedCollectionID, $selectedCollection, $collectionsList);
            getActiveCollectionData($selectedCollection);
            getCardsFromDatabase($selectedCollectionID);
//            addAdditionalCollectionInfo($selectedCollectionID);
            addCardToActiveCollection($selectedCollectionID);
//            addAdditionalCollectionsCardAttribute($selectedCollectionID);

            ?>
<!--            <button type="submit" name="addMoreCard">Dodaj kolejną kartę</button>-->
<!--            <button type="submit" name="addCards">Zapisz karty</button>-->

        </div>
    </div>
    <?php
}

?>
