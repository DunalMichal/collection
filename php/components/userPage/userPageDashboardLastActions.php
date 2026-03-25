

<?php

require "userPageLastActionLastAddCard.php";
require "userPageLastActionLastAddCollection.php";
require "userPageLastActionLastSwaps.php";
require "userPageLastActionLastTransaction.php";

function generateLastActionList(){

    ?>

    <?php
    generateLastAddCard();
    generateLastAddCollection();
    generateLastSwaps();
    generateLastTransaction();

    ?>

<?php
}
