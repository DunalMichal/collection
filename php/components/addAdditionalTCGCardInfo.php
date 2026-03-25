<?php

function addAdditionalTCGCardInfo($selectedCollectionID)
{

    ?>

    <h2>Dodatkowe informacje o karcie TCG</h2>

    <div class="form_box" data-number="10">
        <label for="rarity">Rarity / Rzadkość</label>
        <select id="rarity" name="rarity">
            <option value="">Wybierz</option>
            <option value="common">Common</option>
            <option value="uncommon">Uncommon</option>
            <option value="rare">Rare</option>
            <option value="ultra_rare">Ultra Rare</option>
            <option value="secret_rare">Secret Rare</option>
            <option value="legendary">Legendary</option>
        </select>
    </div>

    <div class="form_box">
        <label for="card_attacks">Atak</label>
        <input type="text" id="card_attacks" name="card_attacks">
    </div>
    <div class="form_box">
        <label for="card_defense">Obrona</label>
        <input type="text" id="card_defense" name="card_defense">
    </div>

    <div class="form_box">
        <label for="card_health_points">Health Points</label>
        <input type="text" id="health_points" name="health_points">
    </div>

    <div class="form_box">
        <label for="mana_cost">Mana Points</label>
        <input type="text" id="mana_cost" name="mana_cost">
    </div>

    <div class="form_box">
        <label for="card_abilities">Umiejętności / Abilities</label>
        <textarea id="card_abilities" name="card_abilities"></textarea>
    </div>

    <div class="form_box">
        <label for="set_symbol">Set Symbol / Kod zestawu</label>
        <input type="text" id="set_symbol" name="set_symbol">
    </div>

    <div class="form_box">
        <label for="energy_type">Energy / Element (dot. TCG)</label>
        <input type="text" id="energy_type" name="energy_type">
    </div>



    <?php
}


