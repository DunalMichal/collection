<?php

function addAdditionalCollectionsCardAttribute($selectedCollectionID){


    ?>



                    ======= Kolekcjonerskie =======
                    <div class="form_section">
                        <h3>Kolekcjonerskie</h3>

                        <div class="form_box" data-number="18">
                            <label for="limited_edition">Edycja Limitowana</label>
                            <input type="checkbox" id="limited_edition" name="limited_edition">
                        </div>

                        <div class="form_box" data-number="19">
                            <label for="serial_number">Numer Seryjny</label>
                            <input type="text" id="serial_number" name="serial_number">
                        </div>

                        <div class="form_box" data-number="20">
                            <label for="autograph">Autograf</label>
                            <input type="checkbox" id="autograph" name="autograph">
                        </div>

                        <div class="form_box" data-number="21">
                            <label for="album_slot">Numer albumu / slot</label>
                            <input type="text" id="album_slot" name="album_slot">
                        </div>

                        <div class="form_box" data-number="22">
                            <label for="language_variant">Wariant językowy</label>
                            <input type="text" id="language_variant" name="language_variant">
                        </div>

                        <div class="form_box" data-number="23">
                            <label for="art_variant">Wariant artystyczny</label>
                            <input type="text" id="art_variant" name="art_variant">
                        </div>

                        <div class="form_box" data-number="24">
                            <label for="condition">Stan fizyczny</label>
                            <select id="condition" name="condition">
                                <option value="">Wybierz</option>
                                <option value="mint">Mint</option>
                                <option value="near_mint">Near Mint</option>
                                <option value="excellent">Excellent</option>
                                <option value="good">Good</option>
                                <option value="poor">Poor</option>
                            </select>
                        </div>
                    </div>


    <!--                 ======= Grading / Ekspertyza ======= -->
    <!--                <div class="form_section">-->
    <!--                    <h3>Grading / Ekspertyza</h3>-->
    <!---->
    <!--                    <div class="form_box" data-number="25">-->
    <!--                        <label for="grading_company">Firma Gradingowa</label>-->
    <!--                        <input type="text" id="grading_company" name="grading_company">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="26">-->
    <!--                        <label for="grade">Ocena / Grade</label>-->
    <!--                        <input type="text" id="grade" name="grade">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="27">-->
    <!--                        <label for="certificate_number">Numer Certyfikatu</label>-->
    <!--                        <input type="text" id="certificate_number" name="certificate_number">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="28">-->
    <!--                        <label for="graded_date">Data Gradingu</label>-->
    <!--                        <input type="date" id="graded_date" name="graded_date">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <!-- ======= Wymiary i fizyczność ======= -->-->
    <!--                <div class="form_section">-->
    <!--                    <h3>Wymiary i fizyczność</h3>-->
    <!---->
    <!--                    <div class="form_box" data-number="29">-->
    <!--                        <label for="dimensions">Wymiary</label>-->
    <!--                        <input type="text" id="dimensions" name="dimensions" placeholder="np. 6.3 x 8.8 cm">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="30">-->
    <!--                        <label for="weight">Waga</label>-->
    <!--                        <input type="text" id="weight" name="weight">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="31">-->
    <!--                        <label for="material">Materiał</label>-->
    <!--                        <input type="text" id="material" name="material">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="32">-->
    <!--                        <label for="batch_number">Numer partii / batch</label>-->
    <!--                        <input type="text" id="batch_number" name="batch_number">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <!-- ======= Rynkowe / Sprzedażowe ======= -->-->
    <!--                <div class="form_section">-->
    <!--                    <h3>Rynkowe / Sprzedażowe</h3>-->
    <!---->
    <!--                    <div class="form_box" data-number="33">-->
    <!--                        <label for="last_sold_price">Ostatnia cena sprzedaży</label>-->
    <!--                        <input type="number" step="0.01" id="last_sold_price" name="last_sold_price">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="34">-->
    <!--                        <label for="last_sold_date">Data ostatniej sprzedaży</label>-->
    <!--                        <input type="date" id="last_sold_date" name="last_sold_date">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="35">-->
    <!--                        <label for="market_value">Aktualna wartość rynkowa</label>-->
    <!--                        <input type="number" step="0.01" id="market_value" name="market_value">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="36">-->
    <!--                        <label for="status_sale">Status sprzedaży</label>-->
    <!--                        <select id="status_sale" name="status_sale">-->
    <!--                            <option value="">Wybierz status</option>-->
    <!--                            <option value="available">Dostępna</option>-->
    <!--                            <option value="sold">Sprzedana</option>-->
    <!--                            <option value="reserved">Zarezerwowana</option>-->
    <!--                        </select>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="37">-->
    <!--                        <label for="owned">Posiadam</label>-->
    <!--                        <input type="checkbox" id="owned" name="owned">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="38">-->
    <!--                        <label for="traded_count">Liczba wymienionych egzemplarzy</label>-->
    <!--                        <input type="number" id="traded_count" name="traded_count">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <!-- ======= Multimedia i dodatkowe ======= -->-->
    <!--                <div class="form_section">-->
    <!--                    <h3>Multimedia i Dodatkowe</h3>-->
    <!---->
    <!--                    <div class="form_box" data-number="39">-->
    <!--                        <label for="qr_code">Kod QR / Link</label>-->
    <!--                        <input type="text" id="qr_code" name="qr_code">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="40">-->
    <!--                        <label for="tags">Tagi / Kategorie</label>-->
    <!--                        <input type="text" id="tags" name="tags" placeholder="np. holo, limited, autograf">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="41">-->
    <!--                        <label for="notes">Notatki / Uwagi</label>-->
    <!--                        <textarea id="notes" name="notes"></textarea>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="42">-->
    <!--                        <label for="photo_url">Zdjęcie / Grafika karty</label>-->
    <!--                        <input type="text" id="photo_url" name="photo_url" placeholder="URL zdjęcia">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="43">-->
    <!--                        <label for="photo_variant">Zdjęcie wariantu (holo / foil / autograf)</label>-->
    <!--                        <input type="text" id="photo_variant" name="photo_variant" placeholder="URL zdjęcia wariantu">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="44">-->
    <!--                        <label for="wishlist">Lista życzeń / Wishlist</label>-->
    <!--                        <input type="text" id="wishlist" name="wishlist">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="45">-->
    <!--                        <label for="user_rating">Ocena użytkownika / Ranking</label>-->
    <!--                        <input type="number" id="user_rating" name="user_rating" min="0" max="10">-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="form_box" data-number="46">-->
    <!--                        <label for="public_comments">Komentarze publiczne</label>-->
    <!--                        <textarea id="public_comments" name="public_comments"></textarea>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="form_submit">-->
    <!--                    <button type="submit">Zapisz Kartę</button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--    </form>-->
    <!---->
    <!--    <form class="form_container-form" method="post" enctype="multipart/form-data">-->
    <!--        <!-- ======= Sekcja: Identyfikacja ======= -->-->
    <!--        <div class="form_section">-->
    <!--            <h3>Identyfikacja</h3>-->
    <!---->
    <!--            <div class="form_box" data-number="1">-->
    <!--                <label for="card_id">Unikalny ID (card_id)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Unikalny identyfikator w bazie</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="card_id" name="card_id" required>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="2">-->
    <!--                <label for="collection_name">Nazwa Kolekcji / Set-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Nazwa serii / zestawu</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="collection_name" name="collection_name" required>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="3">-->
    <!--                <label for="set_code">Kod Setu (set_code)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Kod zestawu / skrót (np. SV05)</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="set_code" name="set_code">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="4">-->
    <!--                <label for="card_number">Numer Karty w Serii (card_number)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Numer lub numeracja typu 45/162</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="card_number" name="card_number">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="5">-->
    <!--                <label for="card_name">Nazwa Karty (card_name)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Pełna nazwa karty</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="card_name" name="card_name" required>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="6">-->
    <!--                <label for="card_type">Typ Karty (card_type)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. Base, Sticker, Leader, Planeswalker</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="card_type" name="card_type">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="7">-->
    <!--                <label for="franchise">Franchise / Marka-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. Pokémon, UEFA, One Piece, NBA</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="franchise" name="franchise">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="8">-->
    <!--                <label for="publisher">Wydawca (publisher)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. Topps, Panini, The Pokémon Company</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="publisher" name="publisher">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="9">-->
    <!--                <label for="release_year">Rok Wydania (release_year)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Rok pierwszego wydania</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" id="release_year" name="release_year" min="1800" max="2100">-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!---->
    <!--         ======= Sekcja: Atrybuty kolekcjonerskie ======= -->
    <!--        <div class="form_section">-->
    <!--            <h3>Atrybuty kolekcjonerskie</h3>-->
    <!---->
    <!--            <div class="form_box" data-number="10">-->
    <!--                <label for="rarity">Rzadkość (rarity)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Common, Rare, Ultra Rare, Secret Rare itp.</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="rarity" name="rarity">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="11">-->
    <!--                <label for="variant">Wariant / Variant (variant)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Holo, Alt Art, Promo, Blue Crystal itp.</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="variant" name="variant">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="12">-->
    <!--                <label for="language">Język karty (language)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">EN / JP / PL itp.</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="language" name="language">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="13">-->
    <!--                <label for="condition">Stan karty (condition)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">NM, EX, PSA 10, BGS 9.5 itp.</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="condition" name="condition">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="14">-->
    <!--                <label for="graded_by">Grading (graded_by)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Jeśli oceniła firma - PSA, BGS, SGC</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="graded_by" name="graded_by">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="15">-->
    <!--                <label for="grade_score">Wynik oceny (grade_score)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. 9, 9.5, 10</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" step="0.1" id="grade_score" name="grade_score" min="0" max="10">-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!---->
    <!--         ======= Sekcja: Dane wizualne / obrazy ======= -->-
    <!--        <div class="form_section">-->
    <!--            <h3>Dane wizualne</h3>-->
    <!---->
    <!--            <div class="form_box" data-number="16">-->
    <!--                <label for="image_front">Obraz przód (image_front)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Plik obrazu — przód karty</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="file" id="image_front" name="image_front" accept="image/*">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="17">-->
    <!--                <label for="image_back">Obraz tył (image_back)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Plik obrazu — tył karty</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="file" id="image_back" name="image_back" accept="image/*">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="18">-->
    <!--                <label for="artist">Artysta / Illustrator-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Imię/nazwa ilustratora (jeśli dotyczy)</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="artist" name="artist">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="19">-->
    <!--                <label for="card_description">Opis / Tekst karty-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Efekty, flavor text, opis mechaniki</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <textarea id="card_description" name="card_description" rows="3"></textarea>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!---->
    <!--         ======= Sekcja: Pola specyficzne dla TCG ======= -->
    <!--        <div class="form_section">-->
    <!--            <h3>Pola specyficzne dla TCG</h3>-->
    <!---->
    <!--            <div class="form_box" data-number="20">-->
    <!--                <label for="energy_type">Typ / Kolor (energy_type)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. Fire, Water, Blue, Red</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="energy_type" name="energy_type">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="21">-->
    <!--                <label for="hp">HP / Punkty życia (hp)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. 330</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" id="hp" name="hp" min="0">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="22">-->
    <!--                <label for="mana_cost">Koszt / Mana / Cost (mana_cost)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. 2 Fire Energy / 4 Mana</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="mana_cost" name="mana_cost">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="23">-->
    <!--                <label for="attack_name">Nazwa ataku (attack_name)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Jedno z pól ataku (jeśli dotyczy)</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="attack_name" name="attack_name">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="24">-->
    <!--                <label for="attack_power">Moc ataku (attack_power)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. 120</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" id="attack_power" name="attack_power" min="0">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="25">-->
    <!--                <label for="card_text">Pełny tekst karty (card_text)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Szczegóły efektów i umiejętności</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <textarea id="card_text" name="card_text" rows="4"></textarea>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="26">-->
    <!--                <label for="set_symbol">Symbol setu (set_symbol)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Symbol zestawu, jeżeli występuje</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="set_symbol" name="set_symbol">-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--         ======= Sekcja: Pola specyficzne dla kart sportowych ======= -->
    <!--        <div class="form_section">-->
    <!--            <h3>Pola specyficzne dla kart sportowych</h3>-->
    <!---->
    <!--            <div class="form_box" data-number="27">-->
    <!--                <label for="sport">Dyscyplina (sport)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Football, Basketball, Baseball, Hockey</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="sport" name="sport">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="28">-->
    <!--                <label for="league">Liga (league)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. UEFA, NBA, MLB</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="league" name="league">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="29">-->
    <!--                <label for="team">Drużyna (team)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Nazwa drużyny</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="team" name="team">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="30">-->
    <!--                <label for="player_name">Imię i nazwisko zawodnika (player_name)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Jeśli karta przedstawia zawodnika</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="player_name" name="player_name">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="31">-->
    <!--                <label for="position">Pozycja (position)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. Forward, Guard, Pitcher</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="position" name="position">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="32">-->
    <!--                <label for="nationality">Narodowość (nationality)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Kraj zawodnika</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="nationality" name="nationality">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="33">-->
    <!--                <label for="stats">Statystyki (stats)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">JSON / skrócony format (np. {"goals":35,"assists":10})</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <textarea id="stats" name="stats" rows="3" placeholder='{"goals":0,"assists":0}'></textarea>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--         ======= Sekcja: Wartość i Rynek ======= -->
    <!--        <div class="form_section">-->
    <!--            <h3>Wartość i rynek</h3>-->
    <!---->
    <!--            <div class="form_box" data-number="34">-->
    <!--                <label for="market_price_low">Cena (niska) (market_price_low)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Najniższa cena na rynku</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" step="0.01" id="market_price_low" name="market_price_low" min="0">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="35">-->
    <!--                <label for="market_price_high">Cena (wysoka) (market_price_high)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Najwyższa cena na rynku</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" step="0.01" id="market_price_high" name="market_price_high" min="0">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="36">-->
    <!--                <label for="last_sold_price">Ostatnia Sprzedaż (last_sold_price)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Ostatnia zanotowana cena sprzedaży</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" step="0.01" id="last_sold_price" name="last_sold_price" min="0">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="37">-->
    <!--                <label for="currency">Waluta (currency)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">USD, EUR, PLN</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="currency" name="currency" placeholder="USD">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="38">-->
    <!--                <label for="price_source">Źródło ceny (price_source)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">eBay, TCGPlayer, CardMarket itp.</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="price_source" name="price_source">-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--       ======= Sekcja: Twoja kolekcja (user-owned fields) ======= -->
    <!--        <div class="form_section">-->
    <!--            <h3>Twoja kolekcja</h3>-->
    <!---->
    <!--            <div class="form_box" data-number="39">-->
    <!--                <label for="owned_quantity">Ilość posiadanych (owned_quantity)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Ile sztuk posiadasz</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" id="owned_quantity" name="owned_quantity" min="0" value="0">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="40">-->
    <!--                <label for="wishlisted">Na liście życzeń (wishlisted)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Zaznacz jeśli chcesz zdobyć</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <select id="wishlisted" name="wishlisted">-->
    <!--                    <option value="false">Nie</option>-->
    <!--                    <option value="true">Tak</option>-->
    <!--                </select>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="41">-->
    <!--                <label for="location">Miejsce przechowywania (location)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">np. Binder 2 / Page 4</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="text" id="location" name="location">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="42">-->
    <!--                <label for="purchase_date">Data zakupu (purchase_date)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Data zakupu karty</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="date" id="purchase_date" name="purchase_date">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="43">-->
    <!--                <label for="purchase_price">Cena zakupu (purchase_price)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Kwota zapłacona</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <input type="number" step="0.01" id="purchase_price" name="purchase_price" min="0">-->
    <!--            </div>-->
    <!---->
    <!--            <div class="form_box" data-number="44">-->
    <!--                <label for="notes">Notatki (notes)-->
    <!--                    <span class="info-icon" tabindex="0">ℹ️-->
    <!--          <span class="tooltip-text">Dowolne uwagi o karcie</span>-->
    <!--        </span>-->
    <!--                </label>-->
    <!--                <textarea id="notes" name="notes" rows="3"></textarea>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--        ======= Submit ======= -->
    <!--        <div class="form_section">-->
    <!--            <div class="form_box" data-number="45">-->
    <!--                <button type="submit">Zapisz kartę</button>-->
    <!--            </div>-->
    <!--        </div>-->

<?php
}
