<?php

function generate_infoBox($title = "", $parameters=[])
{
    if(empty($title) || empty($parameters)){
        return;
    }

    ?>
    <div class="infoBox">
        <p><?= $title ?></p>
        <?php
        foreach ($parameters as $parameter) {
            ?>
            <span><?= $parameter ?></span>
            <br>
            <?php
        }
        ?>
    </div>
    <?php
}
