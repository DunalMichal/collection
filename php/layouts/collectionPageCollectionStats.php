<?php

function generateCollectionStats($selectedCollection)
{

    $collectionData = getCollectionInfo($selectedCollection);


    ?>

    <div class="stats_container">
        <div class="stats_container-grid">
            <div class="stats_container-stats">
                <span>Cards</span>
                <strong>300</strong>
            </div>

            <div class="stats_container-stats">
                <span>Teams</span>
                <strong>20</strong>
            </div>

            <div class="stats_container-stats">
                <span>Insert Sets</span>
                <strong>12</strong>
            </div>

            <div class="stats_container-stats">
                <span>Parallels</span>
                <strong>18</strong>
            </div>

            <div class="stats_container-stats">
                <span>Autos</span>
                <strong>86</strong>
            </div>

            <div class="stats_container-stats">
                <span>1/1 Cards</span>
                <strong>24</strong>
            </div>
        </div>
    </div>
    <?php
}
