<?php
function generateCheckboxTree(array $items, string $inputName = 'items', array $assignedIds = [], int $level = 0)
{
    foreach ($items as $item) {
        $checked = in_array($item['ID'], $assignedIds) ? 'checked' : '';
        $margin = $level * 20;
        $hasSub = !empty($item['SubItems']);
        ?>
        <div class="form_checkbox_box-checkbox <?= $level > 0 ? 'subcategory' : 'root-category' ?>"
             style="margin-left: <?= $margin ?>px; margin-bottom: <?= $level === 0 ? '15px' : '5px' ?>;"
             data-id="<?= htmlspecialchars($item['ID']) ?>"
             data-parent-id="<?= htmlspecialchars($item['ParentID'] ?? 0) ?>"
        >
            <input
                type="checkbox"
                id="<?= htmlspecialchars($inputName . '_' . $item['ID']) ?>"
                name="<?= htmlspecialchars($inputName) ?>[]"
                value="<?= htmlspecialchars($item['ID']) ?>"
                class="category-checkbox"
                <?= $checked ?>
            >
            <label for="<?= htmlspecialchars($inputName . '_' . $item['ID']) ?>">
                <?= htmlspecialchars($item['Name']) ?>
                <?php if($hasSub) echo ' ▾'; ?>
            </label>
        </div>
        <?php

        // Rekurencja dla podkategorii
        if ($hasSub) {
            generateCheckboxTree($item['SubItems'], $inputName, $assignedIds, $level + 1);
        }
    }
}
?>

