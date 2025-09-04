<?php
require "php/layouts/header.php";
require "php/layouts/navigation.php";
require "php/components/infoBox.php";
require "php/api/getCollections.php";
require "php/layouts/cardInfoZrobioneWczesniej.php";
require "php/api/getCard.php";
if(isset($_GET["id"])){
$cardInfo = getCard($_GET["id"]);
}else{
    header("location: index.php");
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
generate_header();
generate_navigation();
//$collection = getCollection($_GET["id"]);
?>




<main class="main">


    <section class="section-main-left">
        <div class="section-main-left-boxes">
            <?php generate_infoBox("General statistics of cards on the site", ["1", "2", "3", "4"]);
            ?>

            <div class="section-main-left-boxes-newRelease">
                <p>Announced Releases</p>
                <span>#1</span>
                <br>
                <span>#2</span>
                <br>

            </div>

            <div class="section-main-left-boxes-newAddCollection">
                <p>Recently Added Collections</p>
                <span>#1</span>
                <br>
                <span>#2</span>
                <br>
                <span>#3</span>
            </div>

        </div>


    </section>
    <section class="section-main-mid">
        <!--            przesuwny baner z ofertami/kolekcjami/logiem-->
        <!--        --><?php
        //        generate_collectionBox();
        //        ?>

        <?php
        generateCardInfo($cardInfo);
        ?>


    </section>
    <section class="section-main-right">
        <div class="section-main-right-boxes">

            <?php
            generate_infoBox("General statistics of cards on the site");
            ?>
            <div class="section-main-right-boxes-InfoBoxMostWanted">
                <p>Top 3 Most Wanted</p>
                <span>#1</span>
                <br>
                <span>#2</span>
                <br>
                <span>#3</span>
                <br>
            </div>
            <div class="section-main-right-boxes-InfoBoxMostValue">
                <p>Top 3 Most Value</p>
                <span>#1</span>
                <br>
                <span>#2</span>
                <br>
                <span>#3</span>
                <br>
            </div>


        </div>

    </section>
</main>


<footer class="footer">


</footer>

</body>

</html>
