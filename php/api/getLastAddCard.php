<?php

function getLastAddCard($howManyCardsInView){

?>
    <div class="section">
        <h2>Ostatnio Dodane Karty</h2>
        <div class="carousel-wrapper">
            <div class="carousel" id="new-cards-carousel">
                <?php
                $colors = ['#f28b82','#fbbc04','#fff475','#ccff90','#a7ffeb','#cbf0f8','#aecbfa','#d7aefb','#fdcfe8','#e6c9a8'];
                $howManyCardsInView = 10;
                for ($i = 0; $i < $howManyCardsInView; $i++) {
                    $color = $colors[$i % count($colors)];
                    ?>
                    <div class="carousel-item" style="background-color: <?php echo $color; ?>;">
                        <div class="placeholder-text">Karta <?php echo $i+1; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


<?php
}
?>

