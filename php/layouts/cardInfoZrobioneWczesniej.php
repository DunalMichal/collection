<?php
function generateCardInfo($cardInfo)
{

    ?>


    <div class="card_info">

    <h1 class="card_info-title">
        Tytuł karty
    </h1>

    <div class="card_info-left">
        <img src="images/graphics/1.jpg" alt="X" class="card_info-left-image"/>

        <p class="card_info-right-card_description-smallbox">Wersje Limitowane </p>
        <div class="card_info-left-thumbnails">

            <img src="images/graphics/1.jpg" alt="X" class="card_info-left-thumbnails-image"/>
            <img src="images/graphics/1.jpg" alt="X" class="card_info-left-thumbnails-image"/>
            <img src="images/graphics/1.jpg" alt="X" class="card_info-left-thumbnails-image"/>
            <img src="images/graphics/1.jpg" alt="X" class="card_info-left-thumbnails-image"/>
            <img src="images/graphics/1.jpg" alt="X" class="card_info-left-thumbnails-image"/>
            <img src="images/graphics/1.jpg" alt="X" class="card_info-left-thumbnails-image"/>
            <img src="images/graphics/1.jpg" alt="X" class="card_info-left-thumbnails-image"/>
        </div>


    </div>


    <div class="card_info-right">

    <div class="card_info-right-card_description">

        <h2 class="card_info-right-title"><?= $cardInfo["PlayerName"] ?></h2>
        <h3 class="card_info-right-title"><?= $cardInfo["PlayerName"] ?></h3>

        <p class="card_info-right-card_description-smallbox">Numer Karty : </p>

        <p class="card_info-right-card_description-smallbox">Drużyna : Arsenal</p>

        <p class="card_info-right-card_description-smallbox">Rzadkość  Karty : Karta Bazowa </p>

        <p class="card_info-right-card_description-smallbox">Seria Karty : Squad Update</p>

        <p class="card_info-right-card_description-smallbox">Kolekcja : </p>

        <p class="card_info-right-card_description-smallbox">Rok : </p>

        <p class="card_info-right-card_description-smallbox">Wydawca : </p>

        <p class="card_info-right-card_description-smallbox">Posiadam: TAK/NIE</p>

        <p class="card_info-right-card_description-smallbox">Popularność : </p>

        <p class="card_info-right-card_description-smallbox">Sprzedaż</p>

        <p class="card_info-right-card_description-smallbox">Kupno</p>

        <p class="card_info-right-card_description-smallbox">Cena </p>








    </div>


    <?php
}
