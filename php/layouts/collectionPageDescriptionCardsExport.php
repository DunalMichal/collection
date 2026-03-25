<?php

include "php/components/universalButtonSecondary.php";
function generateCollectionCardExport() {

    ?>

    <div class="clipboardCopy_container" id="missing">
        <p>Możesz szybko skopiować listę brakujących kart</p>
        <button class="buttonSecondary" onclick="exportMissingToClipboard()">Kopiuj brakujące .txt</button>
        <button class="buttonSecondary" onclick="exportMissingToExcel()">Kopiuj brakujące .xls</button>
        <button class="buttonSecondary" onclick="exportMissingToPDF()">Kopiuj brakujące .pdf</button>
        <textarea id="missing-list" class="hidden"></textarea>
    </div>
<?php
}
