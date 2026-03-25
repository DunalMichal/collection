<?php
include "php/api/getCategories.php";
include "php/api/connect.php";
include "php/api/getActiveCollection.php";
include "php/api/getActiveCollectionData.php";
include "php/api/addCardToActiveCollection.php";
include "php/api/getCardsFromDatabase.php";
include "php/api/getCardsFromCollectionSimple.php";
include "php/api/getCardsFromSelectedCollection.php";
include "php/api/getCardTypesInCollection.php";
include "php/api/getCardVariantsInCollection.php";
include "php/api/getCardLimitsInCollection.php";
include "php/api/getCardsCollectLimits.php";
include "php/api/getCardsToCollectOverall.php";
include "php/api/getCardCategory.php";
include "php/api/getCollectionData.php";
include "php/api/getCardsAttributesValues.php";
include "php/api/getTableColumnsFromTable.php";
include "php/api/getCardCategoriesInCollection.php";
include "php/layouts/mainSectionContainer.php";
include "php/api/getAttributesFromActiveCollection.php";
include "php/api/getCardsCountInCollection.php";
include "php/api/getlastCardNumber.php";

include "php/api/insertCardIntoCollection.php";

include "php/components/addCardUniversalButton.php";
include "php/components/formTextInput.php";
include "php/components/formSelectInput.php";
include "php/components/formCheckbox.php";
include "php/components/viewCollectionSwitcher.php";
include "php/components/formReadOnlyInput.php";
include "php/components/viewCollectionList.php";
include "php/components/viewCollectionAlbum.php";
include "php/components/viewCollectionTable.php";
include "php/components/addAdditionalSportCardInfo.php";
include "php/components/addAdditionalTCGCardInfo.php";
include "php/components/addAdditionalCollectionInfo.php";
include "php/components/addAdditionalCollectionsCardAttribute.php";
include "php/components/formHiddenInput.php";

include "php/layouts/headerMain.php";
include "php/layouts/navigation.php";

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <title>HUB Collector</title>
    <meta charset="UTF-8">
    <meta name="description" content="An example webpage.">
    <link rel="stylesheet" href="css/Index.css">
    <script src="js/menu.js"></script>
    <script src="js/viewCollectionSwitcher.js" defer></script>

</head>

<body>
<?php
generateHeaderMain();
?>
<main>

    <?php

    generateAddCardForm();

    ?>




















</main>
</body>
</html>
