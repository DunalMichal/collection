<?php

function generateActiveUserCollectionList($userID)
{
    ?>
    <div class="collections_view">

        <!-- HEADER -->
        <div class="collections_view-header">
            <span class="collections_view-header-title">Twoje Kolekcje</span>
            <div class="collections_view-header-switcher">
                <button data-view="list">Lista</button>
                <button data-view="grid" class="active">Siatka</button>
                <button data-view="compact">Compact</button>
            </div>
        </div>

        <!-- LISTA KOLEKCJI -->
        <div class="collections_view-list" data-view="list">
            <?php
            $userCollection = getUserCollections($userID);
            $collectionsData = [];

            foreach ($userCollection as $collectionID) {
                $collection = getCollectionInfo($collectionID);
                if ($collection) {
                    $collectionsData[] = $collection;
                }
            }
            if (!empty($collectionsData)):
                foreach ($collectionsData as $collection): ?>

                    <div class="collection-card">

                        <!-- LEWA STRONA -->
                        <a href="/usersCollectionView.php?collection=<?= $collection['ID'] ?>">
                            <div class="collection-card-image"></div>
                        </a>

                        <!-- PRAWA STRONA -->
                        <div class="collection-card-info">
                            <h3><?= htmlspecialchars($collection['Name']) ?></h3>
                            <ul class="collection-card-info-details">
                                <li><strong>Wydawca:</strong> <?= htmlspecialchars($collection['Publisher']) ?></li>
                                <li><strong>Rok wydania:</strong> <?= htmlspecialchars($collection['YearOfPublish']) ?></li>
                                <li><strong>Liczba kart:</strong> <?= htmlspecialchars($collection['CardsCount']) ?></li>
                                <li><strong>Opis:</strong> <?= htmlspecialchars($collection['Description']) ?></li>
                            </ul>

                            <?php
                            $HowManyProcent = 24;
                            $HowManyProcent1 = 38;
                            generate_progressBar($HowManyProcent);
                            generate_progressBar($HowManyProcent1);
                            ?>
                        </div>

                    </div>
                <?php endforeach;
            else:
                echo "Brak kolekcji";
            endif;
            ?>
        </div>

    </div>

    <!-- JS -->
    <script>
        console.log(11);
        const buttons = document.querySelectorAll('.collections_view-header-switcher button');
        const container = document.querySelector('.collections_view-list');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                // ustaw aktywny przycisk
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // ustaw widok
                container.setAttribute('data-view', btn.dataset.view);
            });
        });
    </script>
    <?php
}