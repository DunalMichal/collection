<?php
include "php/api/connect.php";

require "php/api/getCollections.php";
require "php/api/getCard.php";

include "php/layouts/headerMain.php";
include "php/layouts/navigation.php";
include "php/layouts/slider.php";
include "php/layouts/cardInfoZrobioneWczesniej.php";


include "php/api/getCategories.php";
include "php/api/getCardsFromDatabase.php";
include "php/api/getRandomCardFromDataBase.php";
include "php/api/getLastAddCard.php";
include "php/api/getLastAddCollection.php";


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
    <script src="js/sliderAutomatic.js"></script>
    <script src="js/saveToNotepad.js"></script>



</head>

<body>
<?php
generateHeaderMain();
?>

<main class="main">

    <aside class="main-aside">
        <div class="user_main-left">
            <?php
            generate_slider();
            ?></div>
    </aside>
    <section class="main-main">
        <div class="user_main">
            <div class="user_main-left">
                <?php
                generate_slider();
                getLastAddCard(10);
                getLastAddCollection();
                ?>
            </div>
            <div class="user_main-right">
                <div class="section">
                    <h2>Most Expensive</h2>
                    <div class="cards">
                        <?php
                        getLastAddCard(3);
                        ?>
                    </div>
                    <h2>Most Wanted</h2>
                    <div class="cards">
                        <?php
                        getLastAddCard(2);
                        ?>
                    </div>
                    <h2>Most Popular</h2>
                    <div class="cards">
                        <?php
                        getLastAddCard(1);
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </section>


</main>
<script>
    console.log(2);
    document.addEventListener("DOMContentLoaded", () => {
        const carousel = document.getElementById("new-cards-carousel");
        const wrapper = carousel.parentElement;
        const cardGap = parseInt(getComputedStyle(carousel).gap);
        const cardWidth = carousel.querySelector(".carousel-item").offsetWidth + cardGap;

        setInterval(() => {
            // Animacja przesunięcia
            carousel.style.transition = "transform 0.5s linear";
            carousel.style.transform = `translateX(-${cardWidth}px)`;

            // Po animacji: przenieś pierwszą kartę na koniec
            setTimeout(() => {
                carousel.style.transition = "none";
                carousel.appendChild(carousel.querySelector(".carousel-item"));
                carousel.style.transform = "translateX(0)";
            }, 500); // 500ms = czas transition
        }, 3000); // zmiana co 3 sekundy
    });
</script>
</body>
</html>
