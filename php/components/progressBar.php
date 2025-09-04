<?php

function generate_progressBar($HowManyProcent){
    ?>


    <div class="progress">
    <div class="progress-bar" style="width: <?=$HowManyProcent?>%"><?=$HowManyProcent?> %</div>
    </div>
<?php
}
