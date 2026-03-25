<?php

function getActiveCollection($selectedCollectionID, $selectedCollection, $collectionsList)
{
    ?>

    <form method="post">
        <select name="selectedCollectionID" onchange="this.form.submit()">
            <option value="">-- wybierz --</option>
            <?php foreach ($collectionsList as $cL): ?>
                <option value="<?= $cL['ID']; ?>" <?= ($selectedCollectionID == $cL['ID']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($cL['NAME'], ENT_QUOTES, 'UTF-8'); ?>
                </option>

            <?php endforeach; ?>
        </select>
    </form>

    <?php
}
