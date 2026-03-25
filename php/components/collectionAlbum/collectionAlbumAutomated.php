<?php

require_once "php/components/collectionAlbum/collectionAlbumCardSlot.php";
require_once "php/components/collectionAlbum/collectionAlbumPageAutomated.php";


function generate_collectionAlbumAutomated($cardsAmount)
{

    $cardsPerPage = 9;
    $pagesCount = ceil($cardsAmount / $cardsPerPage);

    ?>
    <div class="collectionAlbumAutomated">
        <?php
        for ($page = 0; $page < $pagesCount; $page++) {
            $pageCards = [];

            // Wypełniamy kartami (tu możesz dodać prawdziwe dane, np. ścieżki do obrazków)
            for ($i = 0; $i < $cardsPerPage; $i++) {
                $cardIndex = $page * $cardsPerPage + $i + 1;

                if ($cardIndex <= $cardsAmount) {
                    $pageCards[] = "img/placeholder.jpg";
                } else {
                    $pageCards[] = null;
                }

            }

            // Generujemy stronę
            generate_collectionAlbumPageAutomated($cardsAmount);
//        }
        ?>
    </div>


    <?php
}
}
