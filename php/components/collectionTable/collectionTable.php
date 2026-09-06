<?php
function generate_collectionTable($collectionData)
{
    ?>

        <h1 class="cards-title">Uniwersalna Baza Kart Kolekcjonerskich</h1>

        <!-- Przełączniki widoku -->
<!--    <div class="table-wrapper">-->
<!--        <div class="changeViewButtons">-->
<!--            <button onclick="showTable5('simple')">Prosta</button>-->
<!--            <button onclick="showTable5('advanced')">Zaawansowana</button>-->
<!--            <button onclick="showTable5('trading')">Handel</button>-->
<!--        </div>-->

<!--        Pole do filtrowania -->
<!--        <input type="text" id="searchInput5" class="search-box-5" placeholder="Szukaj karty..."-->
<!--               style="width:100%; padding:8px;" onkeyup="filterTable5()">-->



        <div class="collectionSimpleTable"</div>
    <?php
    generate_collectionTableBasic($collectionData);
    ?>
        <table id="cardsTable5-simple" class="cards-table-5">
            <thead>
            <tr>
                <th colspan="4">
                    <div class="controls">
                        <span onclick="showTable5('simple')">1</span>
                        <span onclick="showTable5('advanced')">2</span>
                        <span onclick="showTable5('trading')">3</span>
                    </div>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nazwa karty</th>
                <th>Seria / Zestaw</th>
                <th>Producent</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td><input type="text" id="searchInput5-simple" class="search-box-6" placeholder="Szukaj karty..."
                           style="width:100%; padding:8px;" onkeyup="filterTable5('simple')"></td>
                <td><input type="text" id="searchInput5-simple" class="search-box-5" placeholder="Szukaj karty..."
                           style="width:100%; padding:8px;" onkeyup="filterTable5('simple')"></td>
                <td><input type="text" id="searchInput5-simple" class="search-box-5" placeholder="Szukaj karty..."
                           style="width:100%; padding:8px;" onkeyup="filterTable5('simple')"></td>
            </tr>
            <?php
            foreach($collectionData as $collection){
                ?>
                <tr>
                    <td><?=$collection["CardUniqueID"]?></td>
                    <td><?=$collection["Name"]?></td>
                    <td><?=$collection["CollectionName"]?></td>
                    <td><?=$collection["Publisher"]?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>


        <table id="cardsTable5-advanced" class="cards-table-5">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa karty</th>
                <th>Seria / Zestaw</th>
                <th>Producent</th>
                <th>Limitacja</th>
                <th>Stan / Grading</th>
                <th>Warianty kolorystyczne</th>
                <th>Limitowane wersje</th>
                <th>Średnia cena</th>
                <th>Najwyższa cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>/</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Messi Rookie</td>
                <td>Panini Mega Cracks 2004</td>
                <td>Panini</td>
                <td>-</td>
                <td>PSA 9</td>
                <td>-</td>
                <td>-</td>
                <td>$150,000</td>
                <td>$200,000</td>
            </tr>

            <tr class="main-row-5" onclick="toggleSubRows5(this)">
                <td>2</td>
                <td>Charizard Holo 1st Ed.</td>
                <td>Base Set 1999</td>
                <td>WOTC</td>
                <td>1st Edition</td>
                <td>PSA 10</td>
                <td>7 wersji kolorystycznych</td>
                <td>3 wersje limitowane</td>
                <td>$350,000</td>
                <td>$420,000</td>
            </tr>
            <tr class="sub-row-5">
                <td>2a</td>
                <td>Charizard Holo Red</td>
                <td>Base Set 1999</td>
                <td>WOTC</td>
                <td>1st Ed</td>
                <td>PSA 10</td>
                <td>Red</td>
                <td>-</td>
                <td>$360,000</td>
                <td>$430,000</td>
            </tr>
            <tr class="sub-row-5">
                <td>2b</td>
                <td>Charizard Holo Blue</td>
                <td>Base Set 1999</td>
                <td>WOTC</td>
                <td>1st Ed</td>
                <td>PSA 10</td>
                <td>Blue</td>
                <td>-</td>
                <td>$355,000</td>
                <td>$425,000</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Euro 2020 Sticker</td>
                <td>Euro 2020 Stickers</td>
                <td>Panini</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>$2</td>
                <td>$5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>LeBron James Rookie</td>
                <td>Topps Chrome 2003</td>
                <td>Topps</td>
                <td>-</td>
                <td>PSA 10</td>
                <td>-</td>
                <td>-</td>
                <td>$50,000</td>
                <td>$70,000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Michael Jordan Fleer 1986</td>
                <td>Fleer 1986</td>
                <td>Fleer</td>
                <td>-</td>
                <td>PSA 9</td>
                <td>-</td>
                <td>-</td>
                <td>$60,000</td>
                <td>$80,000</td>
            </tr>
            <tr class="main-row-5" onclick="toggleSubRows5(this)">
                <td>6</td>
                <td>Black Lotus Alpha</td>
                <td>Magic: The Gathering 1993</td>
                <td>Wizards</td>
                <td>Alpha</td>
                <td>PSA 9</td>
                <td>3 wersje kolorystyczne</td>
                <td>2 wersje limitowane</td>
                <td>$200,000</td>
                <td>$300,000</td>
            </tr>
            <tr class="sub-row-5">
                <td>6a</td>
                <td>Black Lotus Alpha Regular</td>
                <td>MTG 1993</td>
                <td>Wizards</td>
                <td>Alpha</td>
                <td>PSA 9</td>
                <td>Black</td>
                <td>-</td>
                <td>$210,000</td>
                <td>$310,000</td>
            </tr>
            <tr class="sub-row-5">
                <td>6b</td>
                <td>Black Lotus Alpha Foil</td>
                <td>MTG 1993</td>
                <td>Wizards</td>
                <td>Alpha</td>
                <td>PSA 9</td>
                <td>Foil</td>
                <td>-</td>
                <td>$220,000</td>
                <td>$320,000</td>
            </tr>

            <tr>
                <td>7</td>
                <td>Goku Super Saiyan</td>
                <td>Dragon Ball Super 2010</td>
                <td>Bandai</td>
                <td>-</td>
                <td>Mint</td>
                <td>-</td>
                <td>-</td>
                <td>$5,000</td>
                <td>$7,000</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Yugi Kaiba Duel</td>
                <td>Yu-Gi-Oh! 2002</td>
                <td>KONAMI</td>
                <td>-</td>
                <td>NM</td>
                <td>-</td>
                <td>-</td>
                <td>$1,200</td>
                <td>$1,500</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Spider-Man 1990 Marvel</td>
                <td>Marvel Cards 1990</td>
                <td>Marvel</td>
                <td>-</td>
                <td>PSA 9</td>
                <td>-</td>
                <td>-</td>
                <td>$800</td>
                <td>$1,000</td>
            </tr>
            <tr>
                <td>10</td>
                <td>One Piece Luffy</td>
                <td>One Piece 2001</td>
                <td>Bandai</td>
                <td>-</td>
                <td>Mint</td>
                <td>-</td>
                <td>-</td>
                <td>$600</td>
                <td>$800</td>
            </tr>
            </tbody>
        </table>


        <table id="cardsTable5-trading" class="cards-table-5">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa karty</th>
                <th>Limitacja</th>
                <th>Średnia cena</th>
                <th>Najwyższa cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>/</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Messi Rookie</td>
                <td>-</td>
                <td>$150,000</td>
                <td>$200,000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Charizard Holo 1st Ed.</td>
                <td>1st Edition</td>
                <td>$350,000</td>
                <td>$420,000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Euro 2020 Sticker</td>
                <td>-</td>
                <td>$2</td>
                <td>$5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>LeBron James Rookie</td>
                <td>-</td>
                <td>$50,000</td>
                <td>$70,000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Michael Jordan Fleer 1986</td>
                <td>-</td>
                <td>$60,000</td>
                <td>$80,000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Black Lotus Alpha</td>
                <td>Alpha</td>
                <td>$200,000</td>
                <td>$300,000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Goku Super Saiyan</td>
                <td>-</td>
                <td>$5,000</td>
                <td>$7,000</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Yugi Kaiba Duel</td>
                <td>-</td>
                <td>$1,200</td>
                <td>$1,500</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Spider-Man 1990 Marvel</td>
                <td>-</td>
                <td>$800</td>
                <td>$1,000</td>
            </tr>
            <tr>
                <td>10</td>
                <td>One Piece Luffy</td>
                <td>-</td>
                <td>$600</td>
                <td>$800</td>
            </tr>
            </tbody>
        </table>
    </div>



    <script>

        // function showTable5(view) {
        //     const views = ["simple", "advanced", "trading"];
        //
        //     views.forEach(v => {
        //         const table = document.getElementById(`cardsTable5-${v}`);
        //         table.style.display = (v === view) ? "" : "none";
        //     });
        // }

        function showTable5(view) {
            const table = document.getElementById("cardsTable5-advanced");
            const views =["simple" , "advanced" , "trading"];

            views.forEach(v => {
                const table = document.getElementById(`cardsTable5-${v}`);
                table.style.display = (v === view) ? "" : "none";
            });

            if (view === "simple") {
                // Ukryj zaawansowane kolumny
                [...table.querySelectorAll("th, td")].forEach((cell, index) => {
                    if (index > 2) cell.style.display = "none"; // zostaw tylko ID, Nazwę, Serię
                });
            } else if (view === "advanced") {
                // Pokaż wszystkie kolumny
                [...table.querySelectorAll("th, td")].forEach(cell => {
                    cell.style.display = "";
                });
            } else if (view === "trading") {
                // Ukryj szczegółowe kolumny, zostaw tylko ID, Nazwę, Średnia, Najwyższa cena
                [...table.querySelectorAll("tr")].forEach(row => {
                    [...row.children].forEach((cell, index) => {
                        if (![0, 1, 8, 9].includes(index)) {
                            cell.style.display = "none";
                        } else {
                            cell.style.display = "";
                        }
                    });
                });
            }
        }
        window.addEventListener("DOMContentLoaded", () => {
            showTable5("simple");
        });

        // Rozwijanie podwierszy
        // function toggleSubRows5(mainRow) {
        //     let nextRow = mainRow.nextElementSibling;
        //     while (nextRow && nextRow.classList.contains("sub-row-5")) {
        //         nextRow.style.display = (nextRow.style.display === "table-row") ? "none" : "table-row";
        //         nextRow = nextRow.nextElementSibling;
        //     }
        // }

        // Wyszukiwanie w tabeli
        document.getElementById("searchInput5").addEventListener("keyup", function () {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("#cardsTable5-advanced tbody tr");

            rows.forEach(row => {
                let text = row.innerText.toLowerCase();
                if (text.includes(filter)) {
                    row.style.display = "";
                } else if (!row.classList.contains("main-row-5") && !row.classList.contains("sub-row-5")) {
                    row.style.display = "none";
                }
            });
        });



        // Domyślnie pokaz widok Prosty
        // showTable5('simple');
    </script>
    <?php
}

?>


<?php
