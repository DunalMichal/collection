<?php
function viewCollectionSwitcher($default = 'list')
{ ?>

    <div class="view_switcher" data-default="<?= $default ?>">
        <button class="view_switcher-button" data-view="list" title="Widok listy">📄</button>
        <button class="view_switcher-button" data-view="table" title="Widok tabeli">📊</button>
        <button class="view_switcher-button" data-view="album" title="Widok albumu">🖼️</button>
    </div>


    <?php
    generateCardsListView($default);
    generateCardsTableView($default);
    generateCardsAlbumView($default);
    ?>
<?php
}
