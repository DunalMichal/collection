<?php


function formCheckBoxes($name, $label, $options = [], $required = false, $valueAsText = false, $large = false, $selectLimits = [])
{


    ?>
    <div class="form_box <?= $large === true ? "form_box-large" : "form_box-medium" ?>">
        <label class="form_box-label" for="<?= $name ?>">
            <?= $label ?>
        </label>

        <div class="form_box-row">
            <span></span>
            <?php
            foreach ($selectLimits as $limit) {
                ?>
                <span class="form_box-row-label"><?= $limit["Name"] ?></span>
                <?php
            }
            ?>
            <span></span>
        </div>
        <?php foreach ($options as $option): ?>
            <div class="form_box-row">
                <label class="form_box-row-option_label" for="<?= $valueAsText ?>">
                    <?= $option["Name"] ?>
                </label>
                <!--                <input type="checkbox" class="form_box-row-checkbox form_box-row-limitType"-->
                <!--                       id="--><?php //= $option["Name"] ?><!---limitType" name="-->
                <?php //= $name ?><!---limitType[]" value="1"/>-->
                <?php
                foreach ($selectLimits as $limit) {
                    ?>
                    <input type="checkbox" class="form_box-row-checkbox" id="<?= $option["Name"] ?>-limitType"
                           name="<?= $name ?>[<?= $option["ID"] ?>][<?= $limit["ID"] ?>]" value="1"/>
                    <?php
                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>

    <?php
}




