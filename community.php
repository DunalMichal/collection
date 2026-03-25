<?php
require "php/layouts/header.php";
require "php/layouts/navigation.php";
require "php/components/userPage/userPageDashboardLeftSidebar.php";
require "php/components/userPage/userPageMainHead.php";
require "php/components/userPage/userPageDashboard.php";
require "php/components/userPage/userPageDashboardInfo.php";

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
                    <h2>Społeczność</h2>
                    <h3>Wiadomości</h3>
                    <h3>Forum</h3>
                </div>
                <div class="user_main-right">
                    <?php
                    generateUserPageDashboardInfo();
                    ?>
                </div>
            </div>
        </section>


    </main>
    </body>
    </html>
<?php

