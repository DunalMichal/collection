<?php
include "php/temporaryData/temporaryData.php";
include "php/api/getCardsByVariantFromDatabase.php";


function generateCollectionChecklist($selectedCollection): void
{
    $cardTypesInCollection = getCardTypesInCollection($selectedCollection);

//    echo '<pre>';
//    print_r($cardTypesInCollection);
//    echo '</pre>';

    // Pierwszy typ w kolekcji = Base
    $baseType = $cardTypesInCollection[0] ?? null;

    if ($baseType === null) {
        return;
    }

    $baseTypeID = (int)$baseType['ID'];
    $baseTypeName = $baseType['Name'];


//    echo '<pre>';
//    print_r($baseTypeID);
//    print_r($baseTypeName);
//    echo '</pre>';

    global $checklistTemporaryData;
    ?>

    <div class="collection_checklist">

        <?php
        generateChecklistNavigation();
        ?>


        <!-- =========================================
             BASE
        ========================================== -->

        <div
                id="checklist-base"
                class="checklist_content active"
        >
            <?php
//            echo '<pre>';
//            print_r($cardsSelectedByVariant);
//            echo '</pre>';



            $cardsSelectedByVariant = getCardsByVariantFromDatabase($selectedCollection, $baseTypeID);

            generateChecklistSet(
                $baseTypeName,
                count($cardsSelectedByVariant),
                'type-' . $baseTypeID,
                $baseTypeID,
                $cardsSelectedByVariant
            );

            ?>
        </div>


        <!-- =========================================
             INSERTS
        ========================================== -->

        <div
                id="checklist-inserts"
                class="checklist_content"
        >
            <?php

            $set = $checklistTemporaryData['ageless-alchemy'];

            generateChecklistSet(
                $set['title'],
                $set['cardsCount'],
                'ageless-alchemy',
                $set['typeID'],
                $set['cards']
            );

            $set = $checklistTemporaryData['mystic-nights'];

            generateChecklistSet(
                $set['title'],
                $set['cardsCount'],
                'mystic-nights',
                $set['typeID'],
                $set['cards']
            );

            ?>
        </div>


        <!-- =========================================
             AUTOGRAPHS
        ========================================== -->

        <div
                id="checklist-autographs"
                class="checklist_content"
        >
            <?php

            $set = $checklistTemporaryData['base-autographs'];

            generateChecklistSet(
                $set['title'],
                $set['cardsCount'],
                'base-autographs',
                $set['typeID'],
                $set['cards']
            );


            $set = $checklistTemporaryData['legend-autographs'];

            generateChecklistSet(
                $set['title'],
                $set['cardsCount'],
                'legend-autographs',
                $set['typeID'],
                $set['cards']
            );

            ?>
        </div>


        <!-- =========================================
             RELICS
        ========================================== -->

        <div
                id="checklist-relics"
                class="checklist_content"
        >
            <?php

            $set = $checklistTemporaryData['match-relics'];

            generateChecklistSet(
                $set['title'],
                $set['cardsCount'],
                'match-relics',
                $set['typeID'],
                $set['cards']
            );


            $set = $checklistTemporaryData['auto-relics'];

            generateChecklistSet(
                $set['title'],
                $set['cardsCount'],
                'auto-relics',
                $set['typeID'],
                $set['cards']
            );

            ?>
        </div>
        <!-- =========================================
         TEAMS
    ========================================== -->

        <div id="checklist-teams" class="checklist_content">

            <div class="checklist_teams-filter">

                <label for="teamSelect">Teams:</label>

                <select id="teamSelect" class="checklist_teams-select">
                    <option value="arsenal">Arsenal</option>
                    <option value="manchester-city">Manchester City</option>
                    <option value="chelsea">Chelsea</option>
                </select>

            </div>

            <div class="team-panel active" data-team="arsenal">
                <?php
                $set = $checklistTemporaryData['arsenal'];

                generateChecklistSet(
                    $set['title'],
                    $set['cardsCount'],
                    'arsenal',
                    $set['typeID'],
                    $set['cards']
                );
                ?>
            </div>

            <div class="team-panel" data-team="manchester-city">
                <?php
                $set = $checklistTemporaryData['manchester-city'];

                generateChecklistSet(
                    $set['title'],
                    $set['cardsCount'],
                    'manchester-city',
                    $set['typeID'],
                    $set['cards']
                );
                ?>
            </div>

            <div class="team-panel" data-team="chelsea">
                <?php
                $set = $checklistTemporaryData['chelsea'];

                generateChecklistSet(
                    $set['title'],
                    $set['cardsCount'],
                    'chelsea',
                    $set['typeID'],
                    $set['cards']
                );
                ?>
            </div>

        </div>
        <?php
        generateChecklistDrawer();
        ?>

    </div>

    <script src="/js/temporaryData/checklistData.js"></script>
    <script src="/js/checklistFunction.js"></script>

    <?php
}