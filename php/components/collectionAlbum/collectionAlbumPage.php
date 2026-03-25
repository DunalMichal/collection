<?php
require "php/components/collectionAlbum/collectionAlbumCardSlot.php";
require "php/components/collectionAlbum/collectionAlbumCardSlot2.php";

function generate_collectionAlbumPage(){


?>

<div class="album">
    <div class="album-page">
        <?php
        generate_CardSlot();
        generate_CardSlot();
        generate_CardSlot();
        generate_CardSlot2();
        generate_CardSlot2();
        generate_CardSlot();
        generate_CardSlot();
        generate_CardSlot();
        generate_CardSlot();
        ?>


    </div>
</div>


<?php
}
?>