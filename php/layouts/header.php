<?php
require "php/api/connect.php";
require "php/api/getCategories.php";

function generate_header()
{
    ?>
    <header class="header">
        <div class="header-left">
            <div class="header-left-logo">
                <img src="/images/web-logo.png" alt="logo">
            </div>
        </div>

        <div class="header-mid">
            <h1>Hub Collector</h1>
            <p>Nowoczesny portal dla kolekcjonerów – responsywny, bezpieczny i funkcjonalny</p>
            <div class="header-mid-search-container">
                <input type="text" id="searchInput" placeholder="Szukaj kart piłkarskich...">
                <button onclick="searchFunction()">X</button>
            </div>
            <br>
            <br>
        </div>

        <div class="header-right">
            <div class="header-right-wrapper">
                <div class="header-right-wrapper-logo"></div>
                <div class="header-right-wrapper-logo"></div>
                <div class="header-right-wrapper-logo"></div>
                <div class="header-right-wrapper-logo"></div>
            </div>

        </div>
    </header>
    <?php
}
