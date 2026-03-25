<?php

function formHiddenInput($name, $value)
{

    ?>
        <input type="hidden" id="<?= $name ?>" name="<?= $name ?>" value="<?= $value ?>">
    <?php
}



