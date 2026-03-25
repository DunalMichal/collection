
<?php

function getActiveCollectionData($selectedCollection){

?>
    <div class="main_section-container-inner">
        <br>
        <h3>Informacje o wybranej kolekcji</h3>
        <?php
        generateCollectionDescription($selectedCollection);
        ?>
    </div>
<?php
}
