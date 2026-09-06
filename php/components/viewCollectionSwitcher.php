<?php

function viewCollectionSwitcher($currentView = 'list'): void
{
    ?>
    <div class="view_switcher" data-current="<?= htmlspecialchars($currentView) ?>">
        <button class="view_switcher-button" data-view="album">🖼️ Album</button>
        <button class="view_switcher-button" data-view="list">📄 Lista</button>
        <button class="view_switcher-button" data-view="table">📊 Tabela</button>
    </div>
    <?php
}
