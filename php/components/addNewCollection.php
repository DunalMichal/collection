<?php


include "php/components/formReadOnlyInput.php";
include "php/components/formAddNewCollectionsCreateFields.php";
include "php/components/formAddNewCollectionsCheckboxesList.php";
include "php/components/addEdit.php";


include "php/api/getCollectionsInfo.php";
include "php/api/getNextCollectionID.php";
include "php/api/getCollectionFieldFromDataBase.php";
include "php/api/getTableForCheckbox.php";
include "php/api/getCollectionNameFromDatabase.php";


function addNewCollection()
{

    $categories = getTableForCheckbox("categories");
    $attributes = getTableForCheckbox("attributes");
    $cards_variants = getTableForCheckbox("cards_variants");
    $cards_limits = getTableForCheckbox("cards_limits");
    $cards_types = getTableForCheckbox("types_of_cards");
    $nextID = getNextCollectionID();
    $fields = getCollectionFieldFromDataBase();
//    $existingCollections = getCollectionNames();

    ?>
    <div class="form_section">
            <div>
                <?php
                generateFormCollectionFields($fields, $nextID);
//                addEditCollection($nextID, $fields, $existingCollections);
                ?>
            </div>
            <div class="form_section-checkboxes">
                <div class="checkbox-tree-container">
                    <?php generateNewCollectionsCheckboxesList($categories, 'Kolekcja Kategoria', "categories"); ?>
                </div>

                <div class="checkbox-tree-container">
                    <?php generateNewCollectionsCheckboxesList($cards_types, "Karty Typy", "types"); ?>
                </div>

                <div class="checkbox-tree-container">
                    <?php generateNewCollectionsCheckboxesList($cards_variants, "Warianty Kart", "variants"); ?>
                </div>

                <div class="checkbox-tree-container">
                    <?php generateNewCollectionsCheckboxesList($attributes, "Karty Atrybuty", "attributes"); ?>
                </div>

                <div class="checkbox-tree-container">
                    <?php generateNewCollectionsCheckboxesList($cards_limits, "Karty Limity", "limits"); ?>
                </div>


            </div>
            <button type="submit">Zapisz kolekcję</button>
    </div>
    <script>
        console.log(6);
        document.addEventListener('DOMContentLoaded', function () {
            const containers = document.querySelectorAll('.checkbox-tree-container');

            containers.forEach(container => {
                const checkboxes = container.querySelectorAll('.category-checkbox');

                function toggleSubcategories(cb) {
                    const parentId = cb.value;

                    // znajdź wszystkie subcategory w obrębie tego container
                    container.querySelectorAll(`.subcategory[data-parent-id="${parentId}"]`).forEach(sub => {
                        sub.classList.toggle('show', cb.checked);

                        // rekurencyjnie dla dzieci
                        const childCheckbox = sub.querySelector('.category-checkbox');
                        if (childCheckbox) toggleSubcategories(childCheckbox);
                    });
                }

                checkboxes.forEach(cb => {
                    cb.addEventListener('change', function () {
                        toggleSubcategories(cb);
                    });
                });
            });
        });


    </script>
    <script>
        console.log(7);
        document.getElementById('collection_name').addEventListener('change', function () {
            let name = this.value.trim();
            if(name === "") return;

            fetch('getCollectionByName.php?name=' + encodeURIComponent(name))
                .then(response => response.json())
                .then(data => {
                    for (let key in data) {
                        let field = document.querySelector("[name='" + key + "']");
                        if (field && key !== 'name') { // nazwa już w input
                            field.value = data[key];
                        }
                    }
                });
        });
    </script>
    <?php
}
