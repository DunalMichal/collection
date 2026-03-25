<?php

function generateCardsListView($selectedCollectionID)
{


    ?>
    <div class="cards-view cards-view--list">
        <ul class="cards-list">
            <li class="cards-list-header">
                <span class="cards-list-header-item">#</span>
                <span class="cards-list-header-item">Unique</span>
                <span class="cards-list-header-item">Nazwa</span>
                <span class="cards-list-header-item">Typ</span>
                <span class="cards-list-header-item">Wariant</span>
            </li>
            <?php
            $cards = getCardsFromDatabase($selectedCollectionID);
            foreach ($cards as $card): ?>
                <li class="cards-list-item">
                    <span class="cards-list-item"><?= htmlspecialchars($card['CardID'] ?? '') ?></span>
                    <span class="cards-list-item"><?= htmlspecialchars($card['cardUniqueID'] ?? '') ?></span>
                    <span class="cards-list-item"><?= htmlspecialchars($card['CardName'] ?? '') ?></span>
                    <span class="cards-list-item"><?= htmlspecialchars($card['TypeName'] ?? '') ?></span>
                    <span class="cards-list-item"><?= htmlspecialchars($card['VariantName'] ?? '') ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php

}
