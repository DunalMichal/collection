<?php
include "php/layouts/header.php";
include "php/layouts/navigation.php";
include "php/layouts/collectionPageCollectionDescription.php";
include "php/layouts/collectionPageCollectionStats.php";

require "php/components/userPage/userPageDashboardLeftSidebar.php";
require "php/components/userPage/userPageMainHead.php";
require "php/components/userPage/userPageDashboard.php";
require "php/components/userPage/userPageDashboardInfo.php";
include "php/components/userPage/userPageCollectionLIst.php";
include "php/components/progressBar.php";

include "php/components/viewCollectionSwitcher.php";
include "php/components/viewCollectionList.php";
include "php/components/viewCollectionAlbum.php";
include "php/components/viewCollectionTable.php";
include "php/components/viewCollectionAlbumNavigationBar.php";
include "php/components/generateCollectionChecklist.php";


include "php/api/getActiveCollection.php";
include "php/api/getActiveCollectionData.php";
include "php/api/getCardsFromDatabase.php";
include "php/api/getCardTypesInCollection.php";
include "php/api/getCardCategoriesInCollection.php";


include "php/api/getCollectionsList.php";
include "php/api/getUserCollections.php";
include "php/api/getCollections.php";
include "php/api/getCollectionsInfo.php";
include "php/api/getAttributesFromActiveCollection.php";


require_once "php/components/generateChecklistNavigation.php";
require_once "php/components/generateCollectionChecklist.php";
require_once "php/components/generateChecklistRow.php";
require_once "php/components/generateChecklistSet.php";
require_once "php/components/generateChecklistDrawer.php";


if (session_status() === PHP_SESSION_NONE) {
    session_start();
    print_r($_SESSION);
}
if (!isset($_SESSION["ID"])) {
    header("Location: login.php");
}
$selectedCollection = isset($_GET['collection']) ? (int)$_GET['collection'] : 1;

if ($selectedCollection === 0) {
    echo "Nie wybrano kolekcji";
    exit;
}
$userID = $_SESSION["ID"];
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
    <script src="js/viewCollectionSwitcher.js" defer></script>
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
                <?php
                $view = $_GET['view'] ?? 'list';
                getActiveCollectionData($selectedCollection);
//                viewCollectionSwitcher($view);
//                generateCardsTableView($selectedCollection);


//                switch ($view) {
//                    case 'table':
//                        generateCardsTableView($selectedCollection);
//                        break;
//
//                    case 'album':
//                        generateCardsAlbumView($selectedCollection);
//                        break;
//
//                    case 'list':
//                        default:
//                        generateCardsListView($selectedCollection);
//                        break;
//                }
//                getCardsFromDatabase($selectedCollection);
//                generateCardsListView($default);
//                generateCardsTableView($default);
//                generateCardsAlbumView($default);

                ?>
            </div>
        </div>
    </section>


</main>
</body>
</html>

