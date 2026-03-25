<?php
require "php/components/userPage/userPageDashboardUserBadge.php";
require "php/components/userPage/userPageUserLeftButtonsSidebar.php";

function generateSideBarFromUserPage()
{
    generateUserBadge();
    generateUserLeftButtonsSidebar();
    ?>
    <?php
}

?>