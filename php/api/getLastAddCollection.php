<?php

function getLastAddCollection()
{

    ?>
    <div class="section">
        <h2>Nowo dodane kolekcje</h2>
        <div class="carousel-wrapper">
            <div class="carousel" id="new-collections-carousel">
                <?php
                $colors = ['#f28b82', '#fbbc04', '#fff475', '#ccff90', '#a7ffeb', '#cbf0f8', '#aecbfa', '#d7aefb', '#fdcfe8', '#e6c9a8'];
                for ($i = 0; $i < 8; $i++) {
                    $color = $colors[($i + 5) % count($colors)];
                    ?>
                    <div class="carousel-item" style="background-color: <?php echo $color; ?>;">
                        <div class="placeholder-text">Kolekcja <?php echo $i + 1; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
}
