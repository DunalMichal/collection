<?php

function generateChecklistSet(
    string $title,
    int $cardsCount,
    string $setId,
    int $parallelsCount,
    array $rows
): void
{
    ?>

    <div class="collection_checklist-set">

        <div class="collection_checklist-set-header">

            <div class="collection_checklist-set-title">

                <h3>
                    <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
                </h3>

                <span>
                    <?= $cardsCount; ?> Cards
                </span>

            </div>

            <button
                    class="collection_checklist-parallelsButton"
                    type="button"
                    data-set="<?= htmlspecialchars($setId, ENT_QUOTES, 'UTF-8'); ?>"
            >
                <span>Parallels</span>

                <span class="collection_checklist-parallelsButton-count">
                    <?= $parallelsCount; ?>
                </span>

                <span class="collection_checklist-parallelsButton-arrow">
                    →
                </span>

            </button>

        </div>

        <?php

        $currentGroup = null;

        foreach ($rows as $row):

            $number =
                $row['number']
                ?? $row['CardNumberInCollectionID']
                ?? '';

            $cardUniqueID =
                $row['CardUniqueID']
                ?? $row['cardUniqueID']
                ?? '';

            $playerName =
                $row['playerName']
                ?? $row['Name']
                ?? '';

            $attributes =
                $row['Attributes']
                ?? [];

            /*
             * Ustalenie grupy:
             * najpierw Drużyna, jeśli nie ma to Kraj
             */
            $groupName =
                $attributes['Drużyna']
                ?? $attributes['Kraj']
                ?? '';

            $team =
                $attributes['Drużyna']
                ?? $attributes['Kraj']
                ?? '';

            $icons =
                $row['icons']
                ?? [];

            $variants =
                $row['variants']
                ?? [];


            // =========================================
            // NOWA GRUPA / DRUŻYNA / KRAJ
            // =========================================

            if ($groupName !== '' && $groupName !== $currentGroup):

                $currentGroup = $groupName;
                ?>

                <div class="collection_checklist-teamHeader">
                    <span>
                        <?= htmlspecialchars($groupName, ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                </div>

            <?php
            endif;


            // =========================================
            // KARTA
            // =========================================

            generateChecklistRow(
                $number,
                $cardUniqueID,
                $playerName,
                $team,
                $icons,
                $variants
            );

        endforeach;

        ?>

    </div>

    <?php
}