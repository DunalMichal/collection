<?php
require_once "collectionAlbumPageAutomated.php";
require_once "collectionAlbumNavigationMenu.php";

function generate_collectionAlbumAutomatedFull($cardsAmount)
{
    $cardsPerPage = 9;
    $pagesCount = ceil($cardsAmount / $cardsPerPage);
    ?>
    <div class="collectionAlbumAutomatedFull">
        <div class="collectionAlbumAutomatedFull-navigation">
            <?php generate_collectionAlbumNavigationMenu(); ?>
        </div>

        <div class="collectionAlbumAutomatedFull-album">
            <?php generate_collectionAlbumPageAutomated($cardsAmount); ?>
        </div>
    </div>
    <?php
}
?>
