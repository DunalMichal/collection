<?php


function formSelectInput($name, $label, $options = [], $required = false) {

    ?>
    <div class="form_box">
        <label class="form_box-label" for="<?=$name?>">
            <?=$label?>
        </label>
        <select class="form_box-input" id="<?=$name?>" name="<?=$name?>" <?= $required ? 'required' : '' ?>>
            <option value="">-- Wybierz --</option>


            <?php foreach ($options as $row): ?>
                <option value="<?=$row["ID"]?>"><?=$row["Name"]?></option>
            <?php endforeach; ?>

        </select>
    </div>

    <?php
}
?>

