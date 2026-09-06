<?php

function generateCollectionFilter($selectedCollectionID): void{

    $currentURL = $_SERVER['REQUEST_URI'];
    parse_str(parse_url($currentURL,PHP_URL_QUERY), $params);


    print_r($params);

    $cardVariantsInCollection = getCardsVariantsInCollection($selectedCollectionID);

?>
<li class="cards-list-filters">
                <div class="cards-list-filters-cell"></div>
                <div class="cards-list-filters-cell"></div>
                <div class="cards-list-filters-cell">
                    <input class="cards-list-filters-input" placeholder="name lastname">
                </div>
                <div>
                    <select class="cards-list-filters-select">
                        <option>Typ karty</option>
                        <option>Limited</option>
                        <option>Legend</option>
                        <option>Base</option>
                    </select>
                </div>
                <div>
                    <select class="cards-list-filters-select" name="variant" id="variantFilter">
                        <option value="">Variants</option>

                        <?php
                        foreach ($cardVariantsInCollection as $variant): ?>
                            <option value="<?= htmlspecialchars($variant['variantID']) ?>">
                                <?= htmlspecialchars((string)($variant['Name'] ?? '')) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="cards-list-filters-cell"></div>
                <div class="cards-list-filters-cell"></div>
                <div class="cards-list-filters-cell"></div>
                <div class="cards-list-filters-cell"></div>
            </li>
<?php
}

