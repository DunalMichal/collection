<?php
require "php/layouts/header.php";
require "php/layouts/navigation.php";
require "php/layouts/cardInfoZrobioneWczesniej.php";
require "php/layouts/slider.php";
require "php/components/infoBox.php";
require "php/api/getCollections.php";
require "php/api/getCard.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>HUB Collector</title>
    <meta charset="UTF-8">
    <meta name="description" content="An example webpage.">
    <link rel="stylesheet" href="css/Index.css">
    <script src="js/menu.js"></script>
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
        generate_slider();
        ?>
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

