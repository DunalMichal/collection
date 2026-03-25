<?php
function generateCollectionPageHeader($collectionInfo)
{

    ?>

    <section class="page_header">
        <img class="page_header-cover"
             src="images/collectionsCovers/<?= $collectionInfo["Publisher"] ?>-<?= $collectionInfo["Name"] ?>.jpg"
             alt="Okładka kolekcji">
        <div class="page_header-content">

            <h1 class="page_header-content-header"><?= $collectionInfo["Publisher"] ?> <?= $collectionInfo["Name"] ?></h1>
            <div>
                <p class="page_header-content-description">Rok wydania: <?= $collectionInfo["YearOfPublish"] ?></p>
                <p class="page_header-content-description">Ilosć kart: <?= $collectionInfo["CardsCount"] ?> </p>
                <div class="page_header-content-progress">
                    <div class="page_header-content-progress-chip" id="progress-text">Ukończono: 452
                        / <?= $collectionInfo["CardsCount"] ?> (37%)
                    </div>
                    <div class="page_header-content-progress-chip" id="progress-text">Ukończono: 452
                        / <?= $collectionInfo["CardsCount"] ?> (37%)
                    </div>
                </div>
            </div>
    </section>
    <?php
}

