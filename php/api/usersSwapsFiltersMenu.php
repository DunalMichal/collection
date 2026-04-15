<?php

function generateSwapsFiltersMenu()
{

    ?>
    <div class="swap_filters">
        <div class="swap_filters-group">
            <span class="swap_filters-group-label">Aktywność Użytkownika:</span>
            <select id="filter-activity">
                <option>Dziś</option>
                <option>Nie wcześniej niż 7 dni temu</option>
                <option>Nie wcześniej niż 60 dni temu</option>
                <option>Nie więcej niż 6 miesięcy</option>
                <option>All</option>
            </select>
        </div>

        <div class="swap_filters-group">
            <span class="swap_filters-group-label">Świat:</span>
            <select id="filter-world">
                <option>Europa</option>
                <option>Azja</option>
                <option>Afryka</option>
                <option>All</option>
            </select>
        </div>

        <div class="swap_filters-group">
            <span class="swap_filters-group-label">Kraj:</span>
            <select id="filter-country">
                <option>Norway</option>
                <option>Sweden</option>
                <option>Denmark</option>
                <option>All</option>
            </select>
        </div>

        <div class="swap_filters-group">
            <span class="swap_filters-group-label">Region:</span>
            <select id="filter-region">
                <option>Wszystkie Regiony</option>
                <option>Region 1</option>
                <option>Region 2</option>
                <option>All</option>
            </select>
        </div>

        <button id="apply-filters">Zastosuj filtry</button>
    </div>
    <script>
        console.log(4);
        document.getElementById('apply-filters').addEventListener('click', () => {
            const activity = document.getElementById('filter-activity').value;
            const country = document.getElementById('filter-country').value;
            const region = document.getElementById('filter-region').value;

            const allSwaps = document.querySelectorAll('.swap-card');
            allSwaps.forEach(card => {
                const matchActivity = card.dataset.activity === activity || activity === '';
                const matchCountry = card.dataset.country === country || country === '';
                const matchRegion = card.dataset.region === region || region === '';

                if (matchActivity && matchCountry && matchRegion) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
    <?php
}
