<?php
require "php/api/connect.php";
require "php/components/buttonTypeDashboardInfo.php";
require "php/components/buttonTypeDashboardQuickActions.php";
require "php/components/userPage/userPageDashboardProgressBar.php";
require "php/components/userPage/userPageDashboardLastActions.php";
require "php/api/getCardsAmount.php";
require "php/layouts/headerMain.php";

session_start();

function generateUserDashboard()
{
    $userCardsCount = getCardsAmount($_SESSION['ID']);
    ?>



    <div class="dashboard" id="dashboard-content">
    <h3 class="dashboard-title">Twoje Najważniejsze Dane</h3>

    <section class="tab-section" id="tab-overview">
        <h4 class="quick-action-title">Główne Statystyki</h4>
        <div class="dashboard-stats">
            <?php
            generateButtonFromDashboardUserInfo($userCardsCount, "Posiadane Elementy");
            generateButtonFromDashboardUserInfo(512, "Brakujące");
            generateButtonFromDashboardUserInfo(1250.34, "Szacowana Wartość");
            generateButtonFromDashboardUserInfo(123456789, "Cokolwiek");
            generateButtonFromDashboardUserInfo(123456789, "Cokolwiek");
            generateButtonFromDashboardUserInfo(123456789, "Cokolwiek");
            generateButtonFromDashboardUserInfo(123456789, "Cokolwiek");
            ?>
        </div>


        <section class="quick-action">
            <h4 class="quick-action-title">Szybkie akcje</h4>
            <div class="quick-action-grid">
                <?php
                generateButtonFromDashboardQuickActions("Dodaj do Kolekcji");
                generateButtonFromDashboardQuickActions("Dodaj do Kolekcji");
                generateButtonFromDashboardQuickActions("Dodaj do Kolekcji");
                generateButtonFromDashboardQuickActions("Dodaj do Kolekcji");
                generateButtonFromDashboardQuickActions("Dodaj do Kolekcji");
                ?>
            </div>
        </section>

        <section class="progress-stats">
            <h4 class="progress-stats-title">Statystyki postępu</h4>
            <div class="progress-stats-bars">
                <?php
                generateUserPageProgressbar(33, 11);
                generateUserPageProgressbar(44, 35);
                generateUserPageProgressbar(55, 55);
                ?>
            </div>
        </section>

        <section class="last-action">
            <h4 class="last-action-title">Ostatnie akcje</h4>
            <div class="last-action-mainGrid">
                <?php
                generateLastActionList();
                ?>
            </div>

        </section>

    </section>
    <!-- 🔹 ZAKŁADKA 2: AKTYWNOŚĆ -->
    <section class="tab-section" id="tab-activity" style="display:none;">
        <h3 class="dashboard-title">Ostatnie Aktywności</h3>
        <div class="last-action-mainGrid">
            <?php generateLastActionList(); ?>
        </div>
    </section>

    <!-- 🔹 ZAKŁADKA 3: POLECANE -->
    <section class="tab-section" id="tab-recommendations" style="display:none;">
        <h3 class="dashboard-title">Polecane dla Ciebie</h3>
        <p>Tu mogą być rekomendacje kart lub kolekcji.</p>
    </section>

    <!-- 🔹 ZAKŁADKA 4: ODZNAKI -->
    <section class="tab-section" id="tab-badges" style="display:none;">
        <h3 class="dashboard-title">Twoje Odznaki</h3>
        <p>Lista zdobytych odznak lub osiągnięć.</p>
    </section>
    </div>
    <?php
}

?>