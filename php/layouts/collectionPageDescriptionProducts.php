<?php

function generateCollectionProducts(){
    $products = [
        ['name' => 'Album startowy', 'description' => 'Zawiera pierwsze karty bazowe i pozwala rozpocząć kolekcję.', 'color' => 'blue'],
        ['name' => 'Multipack', 'description' => 'Pakiet wielu kart w losowej kolejności.', 'color' => 'gold'],
        ['name' => 'Dodatek', 'description' => 'Dodatkowe karty, aby uzupełnić album.', 'color' => 'red'],
        ['name' => 'Duża puszka', 'description' => 'Duży zestaw kart, idealny dla kolekcjonerów.', 'color' => 'green'],
        ['name' => 'Średnia puszka', 'description' => 'Średni zestaw kart.', 'color' => 'purple'],
        ['name' => 'Mała puszka', 'description' => 'Mały zestaw kart do szybkiego uzupełnienia kolekcji.', 'color' => 'orange'],
        ['name' => 'Display Box', 'description' => 'Zbiorczy box do sprzedaży detalicznej.', 'color' => 'blue'],
        ['name' => 'Retail Box', 'description' => 'Box przeznaczony do sklepów.', 'color' => 'gold'],
        ['name' => 'Eco Pack', 'description' => 'Pakiet ekologiczny z mniejszą ilością opakowania.', 'color' => 'red'],
        ['name' => 'Single Pack', 'description' => 'Pojedynczy pakiet kart.', 'color' => 'green'],
    ];
    ?>
    <div class="products-list">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <div class="product-image <?php echo $product['color']; ?>"></div>
                <div class="product-info">
                    <h4><?php echo $product['name']; ?></h4>
                    <p><?php echo $product['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>



<?php
}
