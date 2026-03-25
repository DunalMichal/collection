<?php

require_once "php/components/collectionAlbum/collectionAlbumCardSlot.php";
require_once "php/components/collectionAlbum/collectionAlbumCardSlot2.php";

function generate_collectionAlbumPageAutomated($cardsAmount){
    $cardsPerPage = 9;
    $pagesCount = ceil($cardsAmount / $cardsPerPage);
    ?>

    <div class="collectionAlbumAutomated">
        <?php
        for ($page = 0; $page < $pagesCount; $page++) {
            ?>
            <div class="album-page">
                <?php
                for ($i = 0; $i < $cardsPerPage; $i++) {
                    $cardIndex = $page * $cardsPerPage + $i + 1;
                    ?>
                    <div class="card-container">
                        <div class="card-number"><?= $cardIndex ?></div>

                        <?php
                        if ($cardIndex <= $cardsAmount) {
                            generate_CardSlot();
                        } else {
                            generate_CardSlot2();
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <?php
}
?>