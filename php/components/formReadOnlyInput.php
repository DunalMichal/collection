<?php

function formReadOnlyInput($nextID, $name, $label)
{
    ?>
    <div class="form_box">
        <label class="form_box-label"><?= htmlspecialchars($label) ?></label>
        <input class="form_box-input" type="text"
               name="<?= htmlspecialchars($name) ?>"
               id="<?= htmlspecialchars($name) ?>"
               value="<?= htmlspecialchars($nextID) ?>" readonly>
    </div>
    <?php
}

