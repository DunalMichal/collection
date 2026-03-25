<?php
include "php/components/universalButtonMain.php";
include "php/components/universalButtonSecondary.php";


function generateCollectionPageMoreInfo($collectionInfo)
{


    ?>
    <div class="collection_moreInfo">
        <button class="buttonSecondary" id="buttonSecondary">Więcej o kolekcji</button>
        <div class="collection_moreInfo-hidden" id="moreSection">
            <div class="collection_moreInfo-hidden-tabs">
                <div class="collection_moreInfo-hidden-tabs-tab" data-tab="cover">Opis</div>
                <div class="collection_moreInfo-hidden-tabs-tab" data-tab="limited">Karty</div>
                <div class="collection_moreInfo-hidden-tabs-tab" data-tab="products">Produkty</div>
                <div class="collection_moreInfo-hidden-tabs-tab" data-tab="missing">Statystyki</div>
                <div class="collection_moreInfo-hidden-tabs-tab" data-tab="special">Eksport</div>
            </div>

            <!-- Sekcje treści zakładek -->
            <div id="cover" class="collection_moreInfo-hidden-tabs-tab_content">
                <?php
                generateCollectionDescription($collectionInfo);
                ?>

            </div>

            <div id="limited" class="collection_moreInfo-hidden-tabs-tab_content">
                <?php
                generateCollectionCardAmount();
                ?>
            </div>

            <div id="products" class="collection_moreInfo-hidden-tabs-tab_content">
                <?php
                generateCollectionProducts();
                ?>
            </div>

            <div id="missing" class="collection_moreInfo-hidden-tabs-tab_content">
                <p>Twoje Statystyki</p>
            </div>

            <div id="special" class="collection_moreInfo-hidden-tabs-tab_content">
                <?php
                generateCollectionCardExport();
                ?>
            </div>
        </div>
    </div>


    <?php
}
