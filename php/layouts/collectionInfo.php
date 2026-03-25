<?php
require_once "php/components/albumTile.php";
require "php/components/collectionTable/collectionTableBasic.php";
require "php/layouts/collectionInfoTableAdvanced.php";
require "php/layouts/collectionInfoTableBasic.php";

function generate_collectionInfo($collectionInfo)
{

    ?>

    <div class="collectionInfo">
        <div class="collectionInfo-title">
            <?= $collectionInfo["Name"] ?>
        </div>

        <div class="collectionInfo-content">
            <div class="collectionInfo-left">
                <div class="collectionInfo-left-image">
                    <img src="images/icons/Euro2024-logo-main.jpg" alt="Euro 2024">
                </div>
                <div class="collectionInfo-progressBars">
                    <?php
                    generate_progressBar(75);
                    generate_progressBar(50);
                    generate_progressBar(25);
                    ?>
                </div>
            </div>

            <div class="collectionInfo-right">
                <div class="nowaTableka">
                <?php
                generate_collectionInfoTableBasic($collectionInfo);
                ?>
<!--                <br>-->
<!--                <br>-->
                <?php
                generate_collectionInfoTableAdvanced($collectionInfo);
                ?>
            </div>
        </div>
    </div>
    <?php
}
