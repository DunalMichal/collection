<?php

$categories = [
    'cat1' => 'Kategoria 1',
    'cat2' => 'Kategoria 2',
    'cat3' => 'Kategoria 3',
    'cat4' => 'Kategoria 4',
    'cat5' => 'Kategoria 5',
    'cat6' => 'Kategoria 6',
    'cat7' => 'Kategoria 7',
    'cat8' => 'Kategoria 8',
    'cat9' => 'Kategoria 9',
    'cat10'=> 'Kategoria 10',
];

$attributes = [
    'attr1' => 'Atrybut 1',
    'attr2' => 'Atrybut 2',
    'attr3' => 'Atrybut 3',
    'attr4' => 'Atrybut 4',
    'attr5' => 'Atrybut 5',
    'attr6' => 'Atrybut 6',
    'attr7' => 'Atrybut 7',
    'attr8' => 'Atrybut 8',
    'attr9' => 'Atrybut 9',
    'attr10'=> 'Atrybut 10',
];

function generateRandomCheckboxes($count = 10) {
    ?>
    <div class="form_checkbox_box">
        <?php
        for ($i = 1; $i <= $count; $i++):
            $id = 'checkbox_' . uniqid();
            $label = 'Opcja ' . rand(1000, 9999);
            ?>
            <div class="form_checkbox_box-checkbox">
                <input type="checkbox" id="<?= htmlspecialchars($id) ?>" name="<?= htmlspecialchars($id) ?>" value="1">
                <label for="<?= htmlspecialchars($id) ?>"><?= htmlspecialchars($label) ?></label>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}
function generateMultipleReadonlyFrames($frames = 5, $checkboxesPerFrame = 10) {
    ?>
    <div class="form_readonly_container">
        <?php for ($i = 1; $i <= $frames; $i++): ?>
            <div class="form_readonly" data-number="<?= $i ?>">
                <span class="form_readonly-label">Ramka <?= $i ?></span>
                <?php generateRandomCheckboxes($checkboxesPerFrame); ?>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}
