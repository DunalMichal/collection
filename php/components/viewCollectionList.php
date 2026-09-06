<?php
include "php/api/getUserCardsFromDatabase.php";
include "php/api/getCardsCollectionsWithUserStats.php";
include "php/api/getCardsVariantsInCollection.php";
include "php/api/getCardsAttributesValues.php";
include "php/api/getAttributesForCollection.php";


function generateCardsListView($selectedCollectionID)
{
    $cardVariantsInCollection = getCardsVariantsInCollection($selectedCollectionID);
    $cardTypeInCollection = getCardTypesInCollection($selectedCollectionID);
    $attributesList = getAttributesFromActiveCollection($selectedCollectionID);
    $attributesInCollection = getAttributesForCollection($selectedCollectionID);

    $cardsAllAttributes = [];
    foreach ($attributesList as $attribute) {
        $cardsAttributesInCollection = getCardsAttributesValues($attribute['ID']);
        $cardsAttributes = [];
        foreach ($cardsAttributesInCollection as $cardsAttribute) {
            $cardsAttributes[] = array("ID" => $cardsAttribute["ID"], "Name" => $cardsAttribute["Value"]);
        }
        $cardsAllAttributes[$attribute['ID']] = $cardsAttributes;
    }
    usort($attributesInCollection, function ($a, $b) {
        return $a['ID'] <=> $b['ID'];
    });
    ksort($cardsAllAttributes);

    ?>

    <!--        //-->
    <!--    ustalam co ma zawiertac tabela-->
    <!---->
    <!---->
    <!--    numer w kolekcji-->
    <!--    unikatowy numer-->
    <!--    nazwy karty-->
    <!---->
    <!---->
    <!--    numer w kolekcji - jesli karta ma numer w kolekcji to dodaje nagłówek "numer w kolekcji"-->
    <!---->
    <!--    kolekcja 1 karta 1 - numer w kolekcji-->
    <!---->
    <!--    pierwsza kolumna w tabeli miała nagłowek "#"-->
    <!---->
    <!--    jezeli ta karta ma unikatowy numer = sprawdzuc w bd czy karta ma unikatowy numer-->
    <!--    jesli ma to nagłowke drugiej koleumy ma "unique"-->
    <!---->
    <!---->
    <!--    wprowadanie zmiennej pomocnicznej decydujacej o kolejnosci kolumn / wygenerowane w php -->
    <!---->
    <!---->
    <!--    wybiore numer w kolekckji - sprawdzu czy jest takie pole w bd, jesli jest to wypusze jako tytuł/nagłowke pierwszej kolumny-->
    <!---->


    <div class="cards-view cards-view--list">
        <ul class="cards-list" id="cards-list">
            <li class="cards-list-header">
                <div class="cards-list-header-column">#</div>
                <div class="cards-list-header-column">Unique</div>
                <div class="cards-list-header-column">Nazwa Karty</div>
                <?php
                foreach ($attributesInCollection as $attribute) {
                    ?>
                    <div class="cards-list-header-column"
                         data-attributeCategoryID="<?= $attribute["ID"] ?>"><?= $attribute["Name"] ?></div>
                    <?php
                }
                ?>
                <!--    wprowadanie zmiennej pomocnicznej decydujacej o kolejnosci kolumn / wygenerowane w php -->

                <div class="cards-list-header-column">Typ</div><!--                // poprawić wyswietlanie poprzez JS odpowiednich nazw kolumn, w przypadku gdy karta nie ma wprowadzonej nazwy -->
                <div class="cards-list-header-column">Wariant</div>
                <div class="cards-list-header-column">Ilość</div>
                <div class="cards-list-header-column">➕</div>
                <div class="cards-list-header-column">➖</div>
                <div class="cards-list-header-column">🔍</div>
            </li>
            <li class="cards-list-filters">
                <div class="cards-list-filters-cell">#</div>
                <div class="cards-list-filters-cell">Unique</div>
                <div class="cards-list-filters-cell">
                    <input
                            id="nameFilter"
                            class="cards-list-filters-input"
                            placeholder="name lastname"
                            value="<?= htmlspecialchars($_GET['name'] ?? '') ?>"
                    >
                </div>
                <?php foreach ($cardsAllAttributes as $index => $attributes): ?>
                    <div>
                        <select class="cards-list-filters-select filtersAttributes" id="teamFilter"
                                data-attribute="<?= $index ?>">
                            <option value="">Wszystkie</option>
                            <?php foreach ($attributes as $attribute): ?>
                                <option value="<?= htmlspecialchars($attribute['ID']) ?>">
                                    <?= htmlspecialchars($attribute['Name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endforeach; ?>


                <div>
                    <select class="cards-list-filters-select" id="typeFilter">
                        <?php
                        foreach ($cardTypeInCollection as $cardType): ?>
                            <option value="<?= htmlspecialchars($cardType['ID']) ?>">
                                <?= htmlspecialchars((string)($cardType['Name'] ?? '')) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="cards-list-filters-select" name="variant" id="variantFilter">
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
            <ul class="cards-list-content" id="cards-list-content">

            </ul>
        </ul>
    </div>

    <pre>
                  <?php
                  print_r($cardsAllAttributes);
                  print_r($attributesInCollection);
                  ?>
              </pre>

    <script>


        function drawTable(cards) {
            const numberOfAttributes = <?=count($cardsAllAttributes)?>;
            const cardsContainer = document.getElementById('cards-list-content');
            cardsContainer.innerHTML = '';
            const attributesHelper = [];
            for (let i = 0; i < numberOfAttributes; i++) {
                attributesHelper.push(i);
            }
            console.log(cards);
            cards.forEach((card) => {
                cardsContainer.innerHTML += `<li class="cards-list-row" data-variant=" ${card['VariantID']}">
                    <div class="cards-list-row-cell"> ${card[`CardNumberInCollectionID`]}</div>
                    <div class="cards-list-row-cell"> ${card[`CardUniqueID`]}</div>
                    <div class="cards-list-row-cell"> ${card[`Name`]}</div>
                     ${
                    attributesHelper.map((value) => {

                        return `<div class="cards-list-row-cell"> ${!!card['Attributes'][value]?.AttributeValue ? card[`Attributes`][value].AttributeValue : ''}</div>`
                    }).join("\n")
                }
                    <div class="cards-list-row-cell"> ${card[`TypeName`]}</div>
                    <div class="cards-list-row-cell"> ${card[`VariantName`]}</div>
                    <div class="cards-list-row-cell">0</div>
                    <div class="cards-list-row-cell">➕</div>
                    <div class="cards-list-row-cell">➖</div>
                    <div class="cards-list-row-cell">🔍</div>
                </li>`
            })
        }

        //kolejnosc kolumn w tabeli, naglówki,

        document.addEventListener('DOMContentLoaded', () => {

            const attributesID = [<?=implode(",", array_keys($cardsAllAttributes))?>]
            console.log(attributesID);
            const variantFilter = document.getElementById('variantFilter');
            const typeFilter = document.getElementById('typeFilter');
            const attributesFilter = document.querySelectorAll('.filtersAttributes');

            const params = new URLSearchParams(window.location.search);

            variantFilter.value = params.get('cardVariant') || '';
            typeFilter.value = params.get('cardType') || '';

            for (let i = 0; i < attributesFilter.length; i++) {
                attributesFilter[i].value = params.get('attr' + attributesID[i]) || '';
            }

            function filterCards() {


                const params = new URLSearchParams(window.location.search);

                params.set("cardVariant", variantFilter.value);
                params.set("cardType", typeFilter.value);
                console.log(attributesFilter);


                for (let i = 0; i < attributesFilter.length; i++) {
                    params.set("attr" + attributesID[i], attributesFilter[i].value);
                }


                const url = new URL(window.location.href);
                url.search = params.toString();
                history.replaceState({}, '', url);


                fetch(`/php/api/cardsFilters.php`, {
                    method: 'POST',
                    headers: {"Content-Type": "application/json"},
                    body: JSON.stringify({
                        collectionID: <?= $selectedCollectionID ?>,
                        cardVariant: variantFilter.value,
                        cardType: typeFilter.value,
                        attributes:
                            Array.from(attributesFilter).map((attribute) => {
                                return (
                                    {
                                        id: attribute.dataset.attribute,
                                        value: attribute.value,
                                    }
                                )
                            })
                    })
                }).then(response => response.json()).then(result => {
                    drawTable(result);
                })
            }

            variantFilter.addEventListener('change', filterCards);
            typeFilter.addEventListener('change', filterCards);
            for (let i = 0; i < attributesFilter.length; i++) {
                attributesFilter[i].addEventListener('change', filterCards);
            }
            filterCards();
        });

    </script>
    <?php

}

