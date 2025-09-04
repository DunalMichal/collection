<?php

function generate_collectionInfo($collectionInfo){

    ?>

 <div class="collection_info">
            <h2 class="collection_info-title">
                <?= $collectionInfo["Name"] ?>
                <br>
                Topps UEFA Euro 2024 Germany
            </h2>

            <div class="collection_info-left">

                <div class="collection_info-left-image">
                    <img src="images/icons/Euro2024-logo-main.jpg" class="collection_info-left-image-image" alt="euro 2024">
                </div>
                <?php
                generate_progressBar(75);
                ?>
            </div>


            <div class="collection_info-right">
                <div class="collection_info-right-description">

<!--                    karta jaka osobny komponent -->

                    <p class="collection_info-right-card_description-smallbox">Rok Wydania
                        : <?= $collectionInfo["YearOfPublish"] ?></p>


<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart: </p>-->
<!---->
<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart bazowych: </p>-->
<!---->
<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart specjalnych: </p>-->
<!---->
<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart posiadanych: </p>-->
<!---->
<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart brakujących: </p>-->
<!---->
<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart A : </p>-->
<!---->
<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart B : </p>-->
<!---->
<!--                    <p class="card_info-right-card_description-smallbox">Ilosć kart C : </p>-->

                    <table class="kolekcja-tabelka">
                        <thead>
                        <tr>
                            <th><?= $collectionInfo["Name"] ?></th>
                            <th><?= $collectionInfo["Publisher"] ?></th>
                            <th><?= $collectionInfo["YearOfPublish"] ?></th>
                            <th><?= $collectionInfo["CardsCount"] ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Przykładowa Kolekcja</td>
                            <td>Example Games</td>
                            <td>2023</td>
                            <td>250</td>
                        </tr>
                        <tr class="special-header">
                            <td colspan="4">Karty Specjalne</td>
                        </tr>
                        <tr>
                            <td>Typ</td>
                            <td colspan="2">Opis</td>
                            <td>Limit</td>
                        </tr>
                        <tr>
                            <td>Rare</td>
                            <td colspan="2">Karty rzadkie</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Ultra Rare</td>
                            <td colspan="2">Karty bardzo rzadkie</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Promo</td>
                            <td colspan="2">Karty promocyjne</td>
                            <td>5</td>
                        </tr>
                        </tbody>
                    </table>

                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        <br>
                        <?= $collectionInfo["Description"] ?>
                    </p>
                </div>
            </div>

     <?php
}
