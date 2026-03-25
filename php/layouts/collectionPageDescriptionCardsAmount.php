<?php

function generateCollectionCardAmount() {
    $cards = [
        ['name' => 'Base', 'type' => 'Base', 'total' => 200, 'owned' => 200, 'frequency' => 'Base', 'color' => 'white'],
        ['name' => 'Base Blue Crystal', 'type' => 'Base Blue Crystal', 'total' => 200, 'owned' => 200, 'frequency' => '1/2', 'color' => 'blue'],
        ['name' => 'Golden Ballers', 'type' => 'Special', 'total' => 3, 'owned' => 1, 'frequency' => 'Rzadka', 'color' => 'gold'],
        ['name' => 'Golden Ballers', 'type' => 'Special', 'total' => 3, 'owned' => 1, 'frequency' => 'Rzadka', 'color' => 'gold'],
        ['name' => 'Golden Ballers', 'type' => 'Special', 'total' => 3, 'owned' => 1, 'frequency' => 'Rzadka', 'color' => 'gold'],
        ['name' => 'Golden Ballers', 'type' => 'Special', 'total' => 3, 'owned' => 1, 'frequency' => 'Rzadka', 'color' => 'gold'],
        ['name' => 'Golden Ballers', 'type' => 'Special', 'total' => 3, 'owned' => 1, 'frequency' => 'Rzadka', 'color' => 'gold'],
        ['name' => 'Golden Ballers', 'type' => 'Special', 'total' => 3, 'owned' => 1, 'frequency' => 'Rzadka', 'color' => 'gold'],
        ['name' => 'Ultimates', 'type' => 'Special', 'total' => 9, 'owned' => 5, 'frequency' => 'Średnia', 'color' => 'red'],
        ['name' => 'Captains', 'type' => 'Special', 'total' => 20, 'owned' => 3, 'frequency' => 'Popularna', 'color' => 'blue'],
        ['name' => 'Fan Favourites', 'type' => 'Special', 'total' => 20, 'owned' => 10, 'frequency' => 'Popularna', 'color' => 'green'],
        ['name' => 'Safe Hands', 'type' => 'Special', 'total' => 8, 'owned' => 2, 'frequency' => 'Rzadka', 'color' => 'purple'],
        // Dodaj kolejne karty wg potrzeb
    ];
    ?>
    <div class="cards-list">
        <?php foreach ($cards as $card): ?>
            <div class="card-item">
                <div class="card-image <?php echo $card['color']; ?>"></div>
                <div class="card-info">
                    <h4><?php echo $card['name']; ?> (<?php echo $card['type']; ?>)</h4>
                    <p>Ilość w kolekcji: <?php echo $card['total']; ?></p>
                    <p>Posiadane: <?php echo $card['owned']; ?>/<?php echo $card['total']; ?></p>
                    <p>Częstość występowania: <?php echo $card['frequency']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="cards-overview">

        <h3>Kategorie kart specjalnych</h3>
        <table class="special-cards-table">
            <thead>
            <tr>
                <th>Kategoria</th>
                <th>Ilość</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Golden Ballers</td><td>3</td></tr>
            <tr><td>Ultimates</td><td>9</td></tr>
            <tr><td>Captains</td><td>20</td></tr>
            <tr><td>Fan Favourites</td><td>20</td></tr>
            <tr><td>Safe Hands</td><td>8</td></tr>
            <tr><td>Rock Solid</td><td>9</td></tr>
            <tr><td>Enforcers</td><td>9</td></tr>
            <tr><td>Non Stop</td><td>9</td></tr>
            <tr><td>Pass Masters</td><td>9</td></tr>
            <tr><td>Wing Wizards</td><td>9</td></tr>
            <tr><td>Game Changers</td><td>9</td></tr>
            <tr><td>Lightning</td><td>9</td></tr>
            <tr><td>Fresh Talent</td><td>9</td></tr>
            <tr><td>Signature Cards</td><td>40</td></tr>
            </tbody>
        </table>

        <h3>Parallels / Kolory</h3>
        <table class="parallels-table">
            <thead>
            <tr>
                <th>Typ</th>
                <th>Liczba</th>
                <th>Black</th>
                <th>Gold</th>
                <th>Red</th>
                <th>Blue</th>
                <th>Purple</th>
                <th>Orange</th>
                <th>Green</th>
                <th>Yellow</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Crystal Crest</td><td>20</td><td>1</td><td>5</td><td>25</td><td>50</td><td>99</td><td>149</td><td>199</td><td>299</td></tr>
            <tr><td>Adrenalyn Rush</td><td>20</td><td>1</td><td>5</td><td>25</td><td>50</td><td>99</td><td>149</td><td>199</td><td>299</td></tr>
            <tr><td>Midnight</td><td>20</td><td>1</td><td>5</td><td>25</td><td>50</td><td>99</td><td>149</td><td>199</td><td>299</td></tr>
            <tr><td>Chemistry</td><td>20</td><td>1</td><td>5</td><td>25</td><td>50</td><td>99</td><td>149</td><td>199</td><td>299</td></tr>
            <tr><td>Pure Class</td><td>20</td><td>1</td><td>5</td><td>25</td><td>50</td><td>99</td><td>149</td><td>199</td><td>299</td></tr>
            </tbody>
        </table>

    </div>




    <?php

}
