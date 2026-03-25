<?php
function generateUserPageProgressbar($progressBase, $progressOverall)
{
    $progressBase = max(0, min(100, (int)$progressBase));
    $progressOverall = max(0, min(100, (int)$progressOverall));
    ?>
    <div class="collection-progress">
        <div class="collection-progress-bars">

            <div class="collection-progress-bars-bar">
                <div class="collection-progress-bars-bar-base" style="width: <?= $progressBase ?>%;">
                    <span class="progress-text"><?= $progressBase ?>%</span>
                </div>
            </div>

            <div class="collection-progress-bars-bar">
                <div class="collection-progress-bars-bar-overall" style="width: <?= $progressOverall ?>%;">
                    <span class="progress-text"><?= $progressOverall ?>%</span>
                </div>
            </div>

        </div>
    </div>

    <?php
}

?>