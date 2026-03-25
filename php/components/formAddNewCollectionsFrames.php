<?php
function generateCategoryFrames(array $categories, array $assignedIds = [])
{
    ?>
    <div class="form_readonly_container">
        <?php
        $i = 1;
        foreach ($categories as $mainCategory):
            ?>
            <div class="form_readonly" data-number="<?= $i ?>">
                <span class="form_readonly-label"><?= htmlspecialchars($mainCategory['CategoryName']) ?></span>

                <?php
                // checkbox głównej kategorii
                ?>
                <div class="form_checkbox_box">
                    <input
                            type="checkbox"
                            id="cat_<?= htmlspecialchars($mainCategory['ID']) ?>"
                            name="categories[]"
                            value="<?= htmlspecialchars($mainCategory['ID']) ?>"
                        <?= in_array($mainCategory['ID'], $assignedIds) ? 'checked' : '' ?>
                    >
                    <label for="cat_<?= htmlspecialchars($mainCategory['ID']) ?>">
                        <?= htmlspecialchars($mainCategory['CategoryName']) ?>
                    </label>
                </div>

                <?php
                // podkategorie
                if (!empty($mainCategory['SubCategories'])) {
                    generateNewCollectionsCheckboxesList($mainCategory['SubCategories'], $assignedIds, 1);
                }
                ?>
            </div>
            <?php
            $i++;
        endforeach;
        ?>
    </div>
    <?php
}
