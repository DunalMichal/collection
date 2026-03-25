<?php
function generate_albumTile($collection){


    ?>
    <div class="albumTile_image">
        <img src="/images/collectionsCovers/topps-main-Euro2024.jpg" alt="foto">
    </div>
    <div class="albumTile_description">
        <span class="albumTile_description_title"><?=$collection["Name"]?></span>
        <br>
        <span class="albumTile_description_details"><?=$collection["YearOfPublish"]?></span>
        <br>
        <span class="albumTile_description_details"><?=$collection["cardsCount"]?></span>
        <br>
        <span class="albumTile_description_details"><?=$collection["Description"]?></span>
    </div>
    </a>
<?php
}



