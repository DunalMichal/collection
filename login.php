<?php
require "php/layouts/header.php";
require "php/layouts/navigation.php";
require "php/components/infoBox.php";
require "php/api/getInfoBoxInfo.php";
require "php/components/userPage/userPageDashboardLeftSidebar.php";
require "php/components/userPage/userPageMainHead.php";
require "php/components/userPage/userPageDashboard.php";
require "php/components/userPage/userPageDashboardInfo.php";
require "php/components/inputField.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>HUB Collector</title>
    <meta charset="UTF-8">
    <meta name="description" content="An example webpage.">
    <link rel="stylesheet" href="css/Index.css">
    <script src="js/menu.js"></script>
</head>

<body>

<?php
generateHeaderMain();
?>
<main class="main">
    <div class="register">

        <form class="registerForm" method="post" action="php/api/login.php">
            <?php
            generateInputField("email", "userEmail", "userEmail", "Email:");
            generateInputField("password", "userPass", "userPass", "Password:");

            ?>
            <input type="submit" value="Submit">
        </form>
    </div>
</main>
</body>
</html>
