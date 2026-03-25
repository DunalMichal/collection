<?php
require "php/layouts/navigation.php";

require "php/api/getCollections.php";
require "php/api/getCard.php";
require "php/api/getInfoBoxInfo.php";
require "php/api/getCollectionsByCategory.php";
require "php/components/collectionList.php";
require "php/components/collectionListSearchTable.php";

include "php/layouts/header.php";




if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HUB Collector</title>
    <meta charset="UTF-8">
    <meta name="description" content="An example webpage.">
    <link rel="stylesheet" href="css/Index.css">
    <script src="js/menu.js"></script>
</head>

<body>


<?php
generateHeaderMain();
generate_navigation();
?>
<main class="main">
    <section class="main-left">
        <div class="main-left-boxes">
            <?php
            showInfoBoxByCategory('nowe_wydawnictwa');
            showInfoBoxByCategory('nowe_karty');
            ?>
        </div>
    </section>

    <section class="main-mid">
        <?php
        generate_SearchTable();
        generate_collectionList($categoriesData);
        ?>
    </section>


    <section class="main-right">
        <div class="main-right-boxes">
            <?php
            showInfoBoxByCategory('najdrozsza');
            showInfoBoxByCategory('poszukiwana');

            ?>
        </div>

    </section>
</main>
</body>
</html>


