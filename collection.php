<?php
require "php/layouts/header.php";
require "php/layouts/collectionList.php";
require "php/layouts/navigation.php";
require "php/layouts/slider.php";
require "php/layouts/collectionInfo.php";
require "php/components/infoBox.php";
require "php/components/progressBar.php";
require "php/components/collectionTable.php";
require "php/api/getCollections.php";
require "php/api/getCollectionsTable.php";
require "php/api/getCollectionsInfo.php";



//$collectionData = getCollections(1);
//$collection = getCollections($_GET["id"]);
$collectionTableData = getTableData();
$collectionInfo = getCollectionInfo($_GET["id"]);

print_r($collectionInfo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HUB Collector</title>
    <meta charset="UTF-8">
    <meta name="description" content="An example webpage.">
    <link rel="stylesheet" href="css/Index.css">
    <script src="js/menu.js"></script>
    <script src="js/tableHiddenRow.js"></script>
    <script src="js/sliderAutomatic.js"></script>
</head>

<body>
<?php
generate_header();
generate_navigation();

?>


<main class="main">
    <section class="main-left">
        <div class="main-left-boxes">
            <?php
            generate_infoBox("General statistics of cards on the site", ["1", "2", "3", "4"]);
            generate_infoBox("General statistics of cards on the site", ["1", "2", "3", "4"]);
            generate_infoBox("General statistics of cards on the site", ["1", "2", "3", "4"]);
            ?>
        </div>
    </section>

    <section class="main-mid">
        <?php
        echo "<pre>";
        print_r($collectionInfo);
        echo "</pre>";
        generate_slider();
        generate_collectionInfo($collectionInfo);
        generate_collectionTable($collectionTableData);
        ?>


        <div class="album">
            <br>
            <br>

            <div class="album-page">
                <div class="card-slot"><img src="karty/karta1.jpg" alt="Karta 1"></div>
                <div class="card-slot"><img src="karty/karta2.jpg" alt="Karta 2"></div>
                <div class="card-slot"></div>
                <div class="card-slot"><img src="karty/karta3.jpg" alt="Karta 3"></div>
                <div class="card-slot"></div>
                <div class="card-slot"></div>
                <div class="card-slot"><img src="karty/karta4.jpg" alt="Karta 4"></div>
                <div class="card-slot"></div>
                <div class="card-slot"></div>
            </div>
        </div>
    </section>


    <section class="main-right">
        <div class="main-right-boxes">
            <?php
            generate_infoBox("General statistics of cards on the site", ["1", "2", "3", "4"]);
            generate_infoBox("General statistics of cards on the site", ["1", "2", "3", "4"]);
            generate_infoBox("General statistics of cards on the site", ["1", "2", "3", "4"]);
            ?>
        </div>
    </section>

</main>
</body>
</html>