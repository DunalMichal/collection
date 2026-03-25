<?php
include "php/components/sectionHeader.php";
include "php/components/formTextInput.php";
include "php/components/formSelectInput.php";
include "php/components/formOptions.php";
include "php/components/formSaveButton.php";
include "php/components/formCheckbox.php";
include "php/components/formSectionAddCollectionsFields.php";

include "php/components/addNewCollection.php";
include "php/components/addNewCollectionCheckboxes.php";

include "php/components/formAddNewCollectionsFrames.php";
function addEditCollectionsMainMenu()
{
    ?>
    <section class="form_section">
        <form action="/php/api/addCollection.php" method="POST" class="form_section-inner">
            <div class="form_section-inner">
                <?php
                sectionHeader("Podstawowe informacje o kolekcji");
                ?>
                <div class="form_section-inner-input">
                    <div class="form_section-inner-input-conditional_fields-main">
                        <?php
                        addNewCollection();
                        ?>
                    </div>
                </div>
        </form>
    </section>
    <?php
}




