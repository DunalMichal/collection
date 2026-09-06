<?php


function generateCollectionDescription($selectedCollection): void
{
    $collectionData = getCollectionInfo($selectedCollection);
    ?>
    <section class="description_container">
        <div class="description_container-content">
            <span class="description_container-content-release">2025/26 Release</span>
            <h1>Topps Merlin Premier League 2025/26</h1>
            <p>
                <?= htmlspecialchars($collectionData['Description'] ?? '-', ENT_QUOTES, 'UTF-8'); ?>
            </p>
            <div class="description_container-content-buttons">

                <button
                        type="button"
                        class="description_container-content-buttons-tabButton active"
                        data-tab="collection"
                >
                    My Collection
                </button>

                <button
                        type="button"
                        class="description_container-content-buttons-tabButton"
                        data-tab="checklist"
                >
                    Checklist
                </button>

                <button
                        type="button"
                        class="description_container-content-buttons-tabButton"
                        data-tab="products"
                >
                    Products
                </button>

                <button
                        type="button"
                        class="description_container-content-buttons-tabButton"
                        data-tab="album"
                >
                    Album
                </button>

                <button
                        type="button"
                        class="description_container-content-buttons-tabButton"
                        data-tab="odds"
                >
                    Odds
                </button>

            </div>
        </div>
        <div class="description_container-image">
            <div class="description_container-image-placeholder"></div>
            <div class="description_container-image-placeholder"></div>
        </div>
    </section>



    <div class="collection_content">

        <div id="collection" class="collection_content-tabContent active">
<!--            --><?php //generateMyCollection($selectedCollection); ?>
            <?php
            $view = $_GET['view'] ?? 'list';
            viewCollectionSwitcher($view);

            switch ($view) {
                case 'table':
                    generateCardsTableView($selectedCollection);
                    break;

                case 'album':
                    generateCardsAlbumView($selectedCollection);
                    break;

                case 'list':
                default:
                    generateCardsListView($selectedCollection);
                    break;
            }
            ?>
        </div>

            <div id="checklist" class="collection_content-tabContent">

                <?php
               generateCollectionChecklist($selectedCollection);
                ?>

            </div>

        <div id="products" class="collection_content-tabContent">
<!--            --><?php //generateProducts($selectedCollection); ?>
            ccc
        </div>

        <div id="album" class="collection_content-tabContent">
<!--            --><?php //generateAlbum($selectedCollection); ?>
            ddd
        </div>

        <div id="odds" class="collection_content-tabContent">
<!--            --><?php //generateOdds($selectedCollection); ?>
            eee
        </div>

    </div>
    <script>
        (() => {

            const collectionTabButtons = document.querySelectorAll(
                ".description_container-content-buttons-tabButton"
            );

            const collectionTabContents = document.querySelectorAll(
                ".collection_content-tabContent"
            );

            collectionTabButtons.forEach(button => {

                button.addEventListener("click", function () {

                    const targetId = this.dataset.tab;
                    const target = document.getElementById(targetId);

                    if (!target) {
                        console.error(
                            "Nie znaleziono zakładki:",
                            targetId
                        );

                        return;
                    }

                    collectionTabButtons.forEach(btn => {
                        btn.classList.remove("active");
                    });

                    collectionTabContents.forEach(tab => {
                        tab.classList.remove("active");
                    });

                    this.classList.add("active");
                    target.classList.add("active");

                });

            });

        })();
    </script>
    <?php
}

