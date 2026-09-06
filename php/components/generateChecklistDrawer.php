<?php

function generateChecklistDrawer(): void
{
    ?>

    <div class="checklist_drawer-overlay"></div>

    <aside
        class="checklist_drawer"
        aria-hidden="true"
    >

        <div class="checklist_drawer-header">

            <div>
                <h2 class="checklist_drawer-title">
                    Parallels
                </h2>

                <span class="checklist_drawer-count">
                    0 parallels
                </span>
            </div>

            <button
                class="checklist_drawer-close"
                type="button"
                aria-label="Close parallels"
            >
                ×
            </button>

        </div>


        <div class="checklist_drawer-search">

            <input
                type="search"
                class="checklist_drawer-searchInput"
                placeholder="Search parallels..."
                autocomplete="off"
            >

        </div>


        <div class="checklist_drawer-content"></div>

    </aside>

    <?php
}