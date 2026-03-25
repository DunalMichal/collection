<?php

function addAdditionalCollectionInfo($selectedCollectionID){

    ?>


        <h2>Dodatkowe informacje o kolekcji</h2>

                    <div class="form_box">
                        <label for="series">Seria / Wydanie</label>
                        <select id="card_type" name="card_type">
                            <option value="">Seria/Wydanie</option>
                            <option value="base">Topps Chrome</option>
                            <option value="holo">Topps Saphire</option>
                            <option value="foil">Panini Excellence</option>
                            <option value="promo">Pokemon Blue</option>
                        </select>
                    </div>

                    <div class="form_box">
                        <label for="release_year">Rok wydania</label>
                        <input id="release_year" name="release_year">
                    </div>

                    <div class="form_box">
                        <label for="publisher">Licencja / Temat </label>
                        <input type="text" id="publisher" name="publisher">
                    </div>

                    <div class="form_box" data-number="16">
                        <label for="license">Licencja / Gra / Liga</label>
                        <input type="text" id="license" name="license">
                    </div>
    <h2>Dodatkowe informacje o kolekcji</h2>


<?php
}
