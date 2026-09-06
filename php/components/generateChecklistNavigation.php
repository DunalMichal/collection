<?php

function generateChecklistNavigation(): void
{
    ?>

    <div class="checklist_navigation">

        <button
                class="checklist_navigation-button active"
                data-checklist-tab="checklist-base"
                type="button"
        >
            Base
        </button>

        <button
                class="checklist_navigation-button"
                data-checklist-tab="checklist-inserts"
                type="button"
        >
            Inserts
        </button>

        <button
                class="checklist_navigation-button"
                data-checklist-tab="checklist-autographs"
                type="button"
        >
            Autographs
        </button>

        <button
                class="checklist_navigation-button"
                data-checklist-tab="checklist-relics"
                type="button"
        >
            Relics
            <button
                    class="checklist_navigation-button"
                    data-checklist-tab="checklist-teams"
                    type="button"
            >
                Teams
            </button>

    </div>

    <?php
}