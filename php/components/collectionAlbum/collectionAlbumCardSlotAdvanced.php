<?php
require_once "php/components/universalButtonAdd.php";
require_once "php/components/universalButtonSubtract.php";
require_once "php/components/universalButtonDelete.php";
require_once "php/components/universalButtonSearch.php";

function generate_CardSlotAdvanced()
{


    ?>
    <div class="card-slot-advanced">
        <div class="card-slot-advanced-img">
            <img src="" alt="Card" class="card-slot-advanced-img_img card-placeholder">
        </div>
        <div class="card-slot-advanced-actions">
            <?php
            generateButtonAdd();
            generateButtonSearch();
            generateButtonSubtract();
            generateButtonDelete();
            ?>
        </div>

        <div class="card-slot-count">
            Have: <strong></strong> szt.
        </div>
    </div>


    <?php
}

