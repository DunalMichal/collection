<?php

function generate_searchTable()
{


    ?>

    <div class="main-toolbar">

        <input type="text" placeholder="Szukaj (np. Messi, Mundial 2014, Barcelona)">

        <div class="checkboxes">
            <label><input type="checkbox"> Moje zbiory</label>
            <label><input type="checkbox"> Pełne / Puste</label>
            <label><input type="checkbox"> Ulubione</label>

        </div>
    </div>

        <!-- 🟦 Kategorie główne -->
        <section class="categories">
            <div class="category" data-category="turnieje">Mistrzostwa</div>
            <div class="category" data-category="ligi">Sezony</div>
            <div class="category" data-category="kluby">Ligi</div>
            <div class="category" data-category="gracze">Kluby</div>
            <div class="category" data-category="kolekcje">Zawodnicy</div>
            <div class="category" data-category="kolekcje">Okazje</div>
        </section>


        <!-- 🎛️ Filtry kaskadowe -->
        <section id="filters" class="filters"></section>


        <!-- 📋 Wyniki -->
        <section id="results" class="results"></section>


    <script>
        const filtersContainer = document.getElementById("filters");
        const categories = document.querySelectorAll(".category");
        const resultsContainer = document.getElementById("results");


        const filterOptions = {
            turnieje: [
                {label: "Wybierz turniej", options: ["MŚ", "Euro", "Copa America", "Afryki", "Azji"]},
                {label: "Rok", options: ["2022", "2018", "2014", "2010", "2006"]},
                {label: "Drużyna", options: ["Hiszpania", "Niemcy", "Brazylia", "Francja"]}
            ],
            ligi: [
                {label: "Rozgrywki", options: ["Champions League", "Liga Europy", "Serie A", "Premier League"]},
                {label: "Sezon", options: ["2022/23", "2021/22", "2020/21"]},
                {label: "Klub", options: ["Real Madrid", "Barcelona", "Chelsea"]}
            ],
            kluby: [
                {label: "Klub", options: ["Real Madrid", "Barcelona", "Bayern", "Juventus"]},
                {label: "Sezon", options: ["2022/23", "2010/11", "2005/06"]}
            ],
            gracze: [
                {label: "Gracz", options: ["Messi", "Ronaldo", "Lewandowski", "Mbappé"]},
                {label: "Rok", options: ["2022", "2014", "2010"]}
            ],
            kolekcje: [
                {label: "Typ", options: ["Naklejki", "Karty Panini", "Limitowane"]},
                {label: "Rok", options: ["2022", "2018", "2006"]}
            ]
        };


        categories.forEach(cat => {
            cat.addEventListener("click", () => {
                const type = cat.dataset.category;
                filtersContainer.innerHTML = "";
                filtersContainer.classList.add("active");


                filterOptions[type].forEach(f => {
                    const select = document.createElement("select");
                    const placeholder = document.createElement("option");
                    placeholder.textContent = f.label;
                    placeholder.disabled = true;
                    placeholder.selected = true;
                    select.appendChild(placeholder);


                    f.options.forEach(opt => {
                        const option = document.createElement("option");
                        option.value = opt;
                        option.textContent = opt;
                        select.appendChild(option);
                    });
                    filtersContainer.appendChild(select);


// Wyświetl wyniki po zmianie selecta
                    select.addEventListener("change", () => {
                        renderResults(type, select.value);
                    });
                });
            });
        });


        function renderResults(type, value) {
            resultsContainer.innerHTML = "";
            for (let i = 1; i <= 6; i++) {
                const card = document.createElement("div");
                card.classList.add("result-card");
                card.textContent = `${type.toUpperCase()} – ${value} – Wynik ${i}`;
                resultsContainer.appendChild(card);
            }
        }
    </script>


    <?php
}

?>

