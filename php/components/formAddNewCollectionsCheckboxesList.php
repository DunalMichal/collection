<?php

include_once "php/components/formGenerateCheckboxTree.php";

function generateNewCollectionsCheckboxesList(array $items, string $label= 'Opcje', string $inputName = 'items', array $assignedIds = [])
{
    /** skąd zaciąga style dla readOnly, prawdopodobniez głównego INDEX.SCSC i czy tak powinno być - na razie nie ruszam  */


//    echo json_encode($items);
    ?>
    <div class="form_readonly">
        <span class="form_readonly-label"><?= htmlspecialchars($label)?></span>
        <div class="form_checkbox_box">
            <?php
            generateCheckboxTree($items, $inputName, $assignedIds);
            ?>
        </div>
    </div>
    <?php
}


