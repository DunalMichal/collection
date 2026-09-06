<?php
function generateAlbumNavigationBar(
    int $firstPage,
    int $currentPage,
    int $totalPages,

): void
{
    $previousPage = $currentPage - 1;
    $nextPage = $currentPage + 1;

    ?>
    <div class="cards-album-navigation">
        <a href="?page=1" class="cards-album-navigation-button <?= $currentPage <= 1 ? 'disabled' : '' ?>">
            «
        </a>

        <a href="?page=<?= $previousPage ?>" class="cards-album-navigation-button <?= $currentPage <= 1 ? 'disabled' : '' ?>">
            ←
        </a>

        <div class="cards-album-navigation-pages">Strona <?= $currentPage ?> / <?= $totalPages ?></div>

        <a href="?page=<?= $nextPage ?>"class="cards-album-navigation-button <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">
            →
        </a>

        <a href="?page=<?= $totalPages ?>"class="cards-album-navigation-button <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">
            »
        </a>
    </div>


    <script>
        window.addEventListener('beforeunload', () => {
            sessionStorage.setItem('scrollY', window.scrollY);
        });

        window.addEventListener('load', () => {
            const scrollY = sessionStorage.getItem('scrollY');

            if (scrollY !== null) {
                window.scrollTo(0, parseInt(scrollY));
                sessionStorage.removeItem('scrollY');
            }
        });
    </script>
    <?php

}

