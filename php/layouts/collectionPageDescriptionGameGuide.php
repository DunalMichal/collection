<?php

function generateCollectionDescriptionGameGuide()
{
        $scans = [
            ['color' => 'blue', 'caption' => 'Przykładowa strona z kartami bazowymi'],
            ['color' => 'gold', 'caption' => 'Sekcja kart „Hero” i „Foil”'],
            ['color' => 'red', 'caption' => 'Karty limitowane i specjalne edycje'],
            ['color' => 'green', 'caption' => 'Inne karty specjalne'],
            ['color' => 'purple', 'caption' => 'Kolejna sekcja'],
            // Dodaj kolejne elementy w zależności od kolekcji
        ];
        ?>
        <div class="description_container-album_img">
            <div class="album-gallery">
                <?php foreach ($scans as $scan): ?>
                    <div class="gallery-item">
                        <div class="placeholder <?php echo $scan['color']; ?>"></div>
                        <p><?php echo $scan['caption']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    <?php
}
