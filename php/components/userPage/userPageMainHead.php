<?php

function generateMainHeadFromUserPage()
{

    ?>

    <div class="dashboard-menu">
        <div class="dashboard-menu-buttons">
            <button class="dashboard-button" data-tab="overview">Przegląd</button>
            <button class="dashboard-button" data-tab="activity" >Aktywność</button>
            <button class="dashboard-button" data-tab="recommendations">Polecane</button>
            <button class="dashboard-button" data-tab="badges">Odznaki</button>
        </div>
        <div class="dashboard-content">
            <div class="tab-content" id="overview"></div>
            <div class="tab-content" id="activity"></div>
            <div class="tab-content" id="recommendations"></div>
            <div class="tab-content" id="badges"></div>
        </div>
    </div>
    <?php
}

?>