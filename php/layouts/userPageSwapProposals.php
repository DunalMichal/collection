<?php

function generateUserSwapProposalsMenu(){

    ?>

    <!-- TRWAJĄCE WYMIANY -->
    <section class="swaps-active">
        <h3>Propozycje</h3>
        <div class="swap-card" data-status="proposed" data-activity="Dziś" data-country="Norway"
             data-region="Region 1">
            <div class="swap-info">
                <span class="swap-status">Propozycja</span>
                <p>Wymiana od użytkownika <strong>Jan A</strong></p>
            </div>
            <div class="swap-actions">
                <button class="btn-accept">Akceptuj</button>
                <button class="btn-reject">Odrzuć</button>
            </div>
        </div>
        <div class="swap-card" data-status="proposed" data-activity="Dziś" data-country="Norway"
             data-region="Region 1">
            <div class="swap-info">
                <span class="swap-status">Propozycja</span>
                <p>Wymiana od użytkownika <strong>Jan B</strong></p>
            </div>
            <div class="swap-actions">
                <button class="btn-accept">Akceptuj</button>
                <button class="btn-reject">Odrzuć</button>
            </div>
        </div>
        <div class="swap-card" data-status="proposed" data-activity="Dziś" data-country="Norway"
             data-region="Region 1">
            <div class="swap-info">
                <span class="swap-status">Propozycja</span>
                <p>Wymiana od użytkownika <strong>Jan C</strong></p>
            </div>
            <div class="swap-actions">
                <button class="btn-accept">Akceptuj</button>
                <button class="btn-reject">Odrzuć</button>
            </div>
        </div>
        <!-- kolejne karty... -->
    </section>




<?php
}