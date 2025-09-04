<?php
require "php/api/connect.php";
require "php/api/getCategories.php";

function generate_header(){
//    echo(json_encode(getCategories()));
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
<!--            <div class="header-right-login-panel">-->
<!--                <form class="header-right-login-form">-->
<!--                    <div class="header-right-login-form-userName">-->
<!---->
<!--                        <input type="text" id="username" name="username" placeholder="Username" required>-->
<!--                    </div>-->
<!--                    <div class="header-right-login-form-password">-->
<!--                        <input type="text" id="password" name="password" placeholder="Password" required>-->
<!--                    </div>-->
<!--                    <div class="header-right-login-form-buttonLogIn">-->
<!--                        <button type="submit">Zaloguj sie</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
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
