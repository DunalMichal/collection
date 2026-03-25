<?php

function formTextInput($name, $label, $required = false)
{

    ?>

    <div class="form_box">
        <label class="form_box-label" for="<?= $name ?>">
            <?=$label?>
        </label>
        <input class="form_box-input" type="text" id="<?= $name ?>" name="<?= $name ?>" required="<?= $required ?>">
    </div>

    <?php
}


