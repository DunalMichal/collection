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

        <div class="user_main">
            <div class="user_main-left">
                <h2>📊 Podstawowe statystyki</h2>
                <br>
                liczba użytkowników / klientów
                <br>
                sprzedaż / przychody
                <br>
                aktywność (np. logowania, kliknięcia)
                <br>
                postęp (np. realizacja celów)
                <br>
                <h2>📈 Wykresy i raporty</h2><br>
                wykresy trendów (np. dzienne, miesięczne)<br>
                porównania wyników<br>
                analizy danych w czasie<br>
                <h2>🔔 Powiadomienia i alerty</h2><br>
                ważne komunikaty<br>
                błędy lub problemy<br>
                przypomnienia<br>
                <h2>🧭 Szybki dostęp (shortcuts)</h2><br>
                przyciski do najważniejszych funkcji<br>
                skróty do często używanych sekcji<br>
                <h2>📋 Ostatnia aktywność</h2><br>
                ostatnie działania użytkownika<br>
                nowe wpisy / zamówienia / wiadomości<br>
                <h2>👤 Informacje o koncie</h2><br>
                profil użytkownika<br>
                status konta<br>
                plan/subskrypcja<br>

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
