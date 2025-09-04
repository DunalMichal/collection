
<?php
require "php/components/albumTile.php";
function generate_collectionBox(){


?>

<div class="section-main-mid-collectionBox">
    <span>KOLECKJA-SPIS/LISTA-KOLEKCJA</span>
    <!--            aktywne popularne kolekcje przed-->
    <div class="section-main-mid-collectionBox-mainBox">
        <?php
        generate_albumTile();
        generate_albumTile();
        generate_albumTile();
        generate_albumTile();
        generate_albumTile();
        generate_albumTile();
        ?>




    </div>
</div>
<?php
}