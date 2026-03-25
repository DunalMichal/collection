<?php


function generateCollectionDescription($selectedCollection)
{
    ?>
    <div class="description_container">
        <div class="description_container-album_info">
            <div class="description_container-album_info-cover">
                <div class="placeholder2"></div>
                <div class="placeholder2"></div>
            </div>

            <div class="description_container-album_info-description">
                <p><strong>Nazwa
                        kolekcji:</strong> <?= htmlspecialchars($selectedCollection['NAME'], ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p>
                    <strong>Wydawca:</strong> <?= isset($selectedCollection['Publisher']) ? htmlspecialchars($selectedCollection['Publisher'], ENT_QUOTES, 'UTF-8') : '-'; ?>
                </p>
                <p><strong>Ilość
                        kart:</strong> <?= isset($selectedCollection['CardsCount']) ? htmlspecialchars($selectedCollection['CardsCount'], ENT_QUOTES, 'UTF-8') : '-'; ?>
                </p>
                <?php
                $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                ";
                echo nl2br($lorem);
                ?>
            </div>
            <?php
            $lorem = "
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                ";
            echo nl2br($lorem);
            ?>

        </div>

        <!--        --><?php
        //        generateCollectionDescriptionGameGuide();
        //
        ?>

    </div>
    <?php
}
