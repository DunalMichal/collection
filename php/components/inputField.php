<?php

function generateInputField($type, $id, $name, $label){

    ?>

    <div>
        <label for="<?= $id ?>" ><?= $label ?> </label>
        <input type="<?= $type ?>" id="<?= $id ?>" name="<?= $name ?>"/>
    </div>


<?php
}
?>



