<?php
include "php/layouts/header.php";
include "php/layouts/navigation.php";
require "php/components/userPage/userPageDashboardLeftSidebar.php";
require "php/components/userPage/userPageMainHead.php";
require "php/components/userPage/userPageDashboard.php";
require "php/components/userPage/userPageDashboardInfo.php";

include "php/api/getCollectionsList.php";

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

        <div class="user_main">
            <div class="user_main-left">
                Twoje Kolekcje
                <?php
                $userCollections = getCollectionsList();
                foreach ($userCollections as $collection) {
                    echo "<div>" . $collection['NAME'] . "</div>";
                }


                ?>

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
