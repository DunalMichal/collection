<?php
include "php/api/getCategories.php";
include "php/api/connect.php";

include "php/layouts/headerMain.php";
include "php/layouts/formSectionContainer.php";

include "php/api/getTestKolekcja.php";
require_once "php/layouts/navigation.php";

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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
<main>

    <?php
    $allCollections = testKolekcja();

    testKolekcja();

    echo "<pre>";
    print_r($allCollections);
    echo "</pre>";
    ?>






</main>
<script src="js/addCardsCollection.js"></script>
</body>
</html>
