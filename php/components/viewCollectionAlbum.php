<?php

function getCardClass(?int $variantID): string
{
    return match ($variantID) {
        1  => "card--base",
        9  => "card--blue",
        10 => "card--green",
        11 => "card--purple",
        default => "cards-album-grid-card",
    };
}

function renderAlbumSlots(array $cardsByPosition, int $start, int $end): void
{
    for ($i = $start; $i <= $end; $i++) {

        $card = $cardsByPosition[$i] ?? null;

        $variantID = $card ? (int)$card['variantID'] : null;
        $class = getCardClass($variantID);

        ?>
        <div class="<?= $class ?>">
            <?= $card['name'] ?? '' ?>
            <?= $variantID ?? '' ?>
        </div>
        <?php
    }
}

function generateCardsAlbumView($selectedCollectionID)
{
    $filterVariants = [9, 10, 11];

    $albumPage9 = 9;

    $currentAlbumPage = max(1, (int)($_GET['page'] ?? 1));
    $firstAlbumPage = 1;
    $totalAlbumPages = 10;

    $cardsPerPage = $albumPage9;
    $cardsPerAlbumSpread = $cardsPerPage * 2;

    $startPosition = (($currentAlbumPage - 1) * $cardsPerAlbumSpread) + 1;

    $leftStart  = $startPosition;
    $leftEnd    = $leftStart + $cardsPerPage - 1;

    $rightStart = $leftEnd + 1;
    $rightEnd   = $rightStart + $cardsPerPage - 1;

    $size = (int) sqrt($cardsPerPage);

    $cards = getCardsCollectionsWithUserStats($selectedCollectionID);

    $cardsByPosition = [];

    foreach ($cards as $card) {
        if (in_array((int)$card['variantID'], $filterVariants)) {
            $pos = (int)$card['cardNumberInCollectionID'];
            $cardsByPosition[$pos] = $card;
        }
    }

    generateAlbumNavigationBar($firstAlbumPage, $currentAlbumPage, $totalAlbumPages);
    ?>

    <div class="cards-album cards-view--album">

        <div class="cards-album-page album-page--left">
            <div class="cards-album-grid"
                 style="--cols: <?= $size ?>; --rows: <?= $size ?>;">

                <?php renderAlbumSlots($cardsByPosition, $leftStart, $leftEnd); ?>

            </div>
        </div>

        <div class="cards-album-page album-page--right">
            <div class="cards-album-grid"
                 style="--cols: <?= $size ?>; --rows: <?= $size ?>;">

                <?php renderAlbumSlots($cardsByPosition, $rightStart, $rightEnd); ?>

            </div>
        </div>

    </div>

    <?php
}