<?php

function addAdditionalSportCardInfo($selectedCollectionID)
{

    ?>

    <h2>Dodatkowe informacje o karcie Sport</h2>
    <div class="form_box">
        <label for="card_variant">First Card
            <input type="checkbox" id="autograph" name="autograph">
        </label>
    </div>

    <div class="form_box">
        <label for="card_graphic">Artysta / Grafik</label>
        <input type="text" id="card_graphic" name="card_graphic">
    </div>
    <div class="form_box">
        <label for="unit_type">Typ jednostki / postaci</label>
        <input type="text" id="unit_type" name="unit_type">
    </div>

    <?php


}

?>








