<?php
require "php/layouts/headerMainLogo.php";
require "php/layouts/headerMainSearchBar.php";
require "php/layouts/headerMainNotifications.php";

function generateHeaderMain()
{


    ?>

    <header class="header-main">
        <div class="header-main-inner">
            <div class="header-main-top">
                <?php
                generateHeaderMainLogo();
                generateHeaderMainSearchBar();
                generateHeaderMainNotifications();
                ?>
            </div>

            <div class="header-main-categories">
                <?php generate_navigation(); ?>
            </div>
        </div>
    </header>

    <?php
}






//<!--            Potencjalne ulepszenia-->
//<!---->
//<!--            Zdefiniowanie kontenera nav.global – upewnij się, że CSS .global odpowiada tej strukturze.-->
//<!---->
//<!--            Zachowanie responsywności – teraz wszystko może się rozjechać przy mniejszych ekranach, -->
//<!--            więc możesz rozważyć flex-wrap: wrap w nav.global.-->
//<!---->
//<!--            Ewentualne warunki logowania – możesz w przyszłości w funkcji generateHeaderMainNotifications() -->
//<!--            sprawdzać, czy użytkownik jest zalogowany, i wtedy pokazywać przyciski Zaloguj / Zarejestruj lub Wyloguj.-->
//<!--            -->