<?php
require "php/layouts/header.php";
require "php/layouts/navigation.php";

include "php/layouts/userPageSwapProposals.php";

require "php/components/userPage/userPageDashboardLeftSidebar.php";
require "php/components/userPage/userPageMainHead.php";
require "php/components/userPage/userPageDashboard.php";
require "php/components/userPage/userPageDashboardInfo.php";

include "php/api/usersSwapsFiltersMenu.php";


if (session_status() === PHP_SESSION_NONE) {
    session_start();
    print_r($_SESSION);
}
if (!isset($_SESSION["ID"])) {
    header("Location: login.php");
}

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>HUB Collector</title>
        <meta charset="UTF-8">
        <meta name="description" content="An example webpage.">
        <link rel="stylesheet" href="css/Index.css">
        <script src="js/menu.js"></script>
        <script src="js/userPageDashboardActionButtons.js"></script>
    </head>

    <body>
    <?php
    generateHeaderMain();
    ?>

    <main class="main">


        <aside class="main-aside">
            <?php
            generateSideBarFromUserPage();
            ?>
        </aside>


        <section class="main-main">
            <?php
            generateMainHeadFromUserPage();
            ?>
            <div class="user_main">
                <div class="user_main-left">
                    <div class="user_swaps_wrapper"
                    <div class="user_swaps_wrapper-header">
                        <h2>Szukaj Mozliwych Wymian</h2>
                    </div>
                    <?php
                    generateSwapsFiltersMenu();
                    generateUserSwapProposalsMenu();
                    ?>



                    <!-- ZAKOŃCZONE WYMIANY -->
                    <section class="swaps-completed">
                        <h3>Zakończone</h3>
                        <div class="swap-card completed" data-status="completed" data-activity="Dziś"
                             data-country="Norway" data-region="Region 1">
                            <div class="swap-info">
                                <span class="swap-status">Zakończona</span>
                                <p>Wymiana od użytkownika <strong>JanK</strong></p>
                            </div>
                        </div>
                        <h3>Historia</h3>
                        <div class="swap-card completed" data-status="completed" data-activity="Dziś"
                             data-country="Norway" data-region="Region 1">
                            <div class="swap-info">
                                <span class="swap-status">Zakończona</span>
                                <p>Wymiana od użytkownika <strong>JanK</strong></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            </div>
            <!--                <div class="user_main-right">-->
            <!--                    --><?php
            //                    generateUserPageDashboardInfo();
            //                    ?>
            <!--                </div>-->
            </div>

        </section>


    </main>
    </body>
    </html>
<?php

