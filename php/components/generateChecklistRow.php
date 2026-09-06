<?php

function generateChecklistRow(
    string $number,
    string $cardUniqueID,
    string $playerName,
    string $team,
    array  $icons,
    array  $variants
): void
{
    ?>

    <div class="collection_checklist-row">

        <button
                class="collection_checklist-row-header"
                type="button"
        >

            <div class="collection_checklist-row-player">

                <span class="collection_checklist-row-number">
                    <?= htmlspecialchars($number, ENT_QUOTES, 'UTF-8'); ?>
                </span>
                <span class="collection_checklist-row-unique">
                    <?= htmlspecialchars($cardUniqueID, ENT_QUOTES, 'UTF-8') ?>
                </span>

                <div class="collection_checklist-row-info">


                    <h3>
                        <?= htmlspecialchars($playerName, ENT_QUOTES, 'UTF-8'); ?>
                    </h3>

                    <span>
                        <?= htmlspecialchars($team, ENT_QUOTES, 'UTF-8'); ?>
                    </span>

                </div>

            </div>


            <div class="collection_checklist-row-right">

                <div class="collection_checklist-row-icons">

                    <?php foreach ($icons as $icon): ?>

                        <span title="<?= htmlspecialchars($icon['title'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?= htmlspecialchars($icon['symbol'], ENT_QUOTES, 'UTF-8'); ?>
                        </span>

                    <?php endforeach; ?>

                </div>


                <span class="collection_checklist-row-count">
                    <?= count($variants); ?>
                </span>


                <span class="collection_checklist-row-arrow">
                    ▼
                </span>

            </div>

        </button>


        <div class="collection_checklist-row-content">

            <?php foreach ($variants as $variant): ?>

                <div class="collection_checklist-card">

                    <span>
                        <?= htmlspecialchars($number, ENT_QUOTES, 'UTF-8'); ?>
                    </span>

                    <span>
                        <?= htmlspecialchars($variant['name'], ENT_QUOTES, 'UTF-8'); ?>
                    </span>

                    <span>
                        <?= htmlspecialchars($variant['limit'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                    </span>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

    <?php
}
