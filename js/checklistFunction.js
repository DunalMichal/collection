(() => {

    const checklist = document.querySelector(
        ".collection_checklist"
    );

    if (!checklist) {
        return;
    }


    /* =========================================
     * CHECKLIST TABS
     * ========================================= */

    const tabButtons = checklist.querySelectorAll(
        ".checklist_navigation-button"
    );

    const tabContents = checklist.querySelectorAll(
        ".checklist_content"
    );

    tabButtons.forEach(button => {

        button.addEventListener("click", function () {

            const targetId = this.dataset.checklistTab;

            const target = checklist.querySelector(
                "#" + targetId
            );

            if (!target) {
                return;
            }

            tabButtons.forEach(btn => {
                btn.classList.remove("active");
            });

            tabContents.forEach(content => {
                content.classList.remove("active");
            });

            this.classList.add("active");
            target.classList.add("active");

        });

    });


    /* =========================================
     * CHECKLIST ROW EXPAND
     * ========================================= */

    checklist
        .querySelectorAll(".collection_checklist-row")
        .forEach(row => {

            const header = row.querySelector(
                ".collection_checklist-row-header"
            );

            if (!header) {
                return;
            }

            header.addEventListener("click", function () {

                row.classList.toggle("active");

            });

        });


    /* =========================================
     * TEAMS SELECT
     * ========================================= */

    const teamSelect = checklist.querySelector(
        "#teamSelect"
    );

    const teamPanels = checklist.querySelectorAll(
        ".team-panel"
    );

    if (teamSelect && teamPanels.length) {

        teamSelect.addEventListener("change", function () {

            const selectedTeam = this.value;

            teamPanels.forEach(panel => {

                panel.classList.toggle(
                    "active",
                    panel.dataset.team === selectedTeam
                );

            });

        });

    }


    /* =========================================
     * PARALLELS DRAWER
     * ========================================= */

    const drawer = checklist.querySelector(
        ".checklist_drawer"
    );

    const overlay = checklist.querySelector(
        ".checklist_drawer-overlay"
    );

    const closeButton = checklist.querySelector(
        ".checklist_drawer-close"
    );

    const drawerTitle = checklist.querySelector(
        ".checklist_drawer-title"
    );

    const drawerCount = checklist.querySelector(
        ".checklist_drawer-count"
    );

    const drawerContent = checklist.querySelector(
        ".checklist_drawer-content"
    );

    const searchInput = checklist.querySelector(
        ".checklist_drawer-searchInput"
    );


    /*
     * Jeżeli drawer nie istnieje,
     * reszta strony nadal będzie działać.
     */

    if (
        !drawer ||
        !overlay ||
        !closeButton ||
        !drawerTitle ||
        !drawerCount ||
        !drawerContent ||
        !searchInput
    ) {
        return;
    }


    let currentParallels = [];


    /* =========================================
     * RENDER PARALLELS
     * ========================================= */

    function renderParallels(parallels) {

        drawerContent.innerHTML = "";

        if (!parallels.length) {

            drawerContent.innerHTML = `
                <div class="checklist_drawer-empty">
                    No parallels found.
                </div>
            `;

            return;
        }


        parallels.forEach(parallel => {

            const element = document.createElement("div");

            element.classList.add(
                "checklist_parallel"
            );


            const limitHTML = parallel.limit
                ? `
                    <span class="checklist_parallel-limit">
                        ${parallel.limit}
                    </span>
                `
                : "";


            const oddsHTML = parallel.odds
                ? `
                    <div class="checklist_parallel-details">
                        ${parallel.odds}
                    </div>
                `
                : "";


            const exclusiveHTML = parallel.exclusive
                ? `
                    <span class="checklist_parallel-badge">
                        ${parallel.exclusive}
                    </span>
                `
                : "";


            element.innerHTML = `

                <div class="checklist_parallel-header">

                    <strong>
                        ${parallel.name}
                    </strong>

                    ${limitHTML}

                </div>

                ${oddsHTML}

                ${exclusiveHTML}

            `;


            drawerContent.appendChild(element);

        });

    }


    /* =========================================
     * OPEN DRAWER
     * ========================================= */

    function openParallelsDrawer(setId) {

        const data =
            window.parallelsData?.[setId];


        /*
         * Jeśli dla danego seta nie ma jeszcze
         * danych tymczasowych, drawer nadal
         * się otworzy zamiast przerywać działanie.
         */

        if (!data) {

            currentParallels = [];

            drawerTitle.textContent =
                "Parallels";

            drawerCount.textContent =
                "0 parallels";

            searchInput.value = "";

            renderParallels([]);

        } else {

            currentParallels =
                data.parallels ?? [];

            drawerTitle.textContent =
                data.title + " Parallels";

            drawerCount.textContent =
                currentParallels.length +
                " parallels";

            searchInput.value = "";

            renderParallels(
                currentParallels
            );

        }


        drawer.classList.add("active");
        overlay.classList.add("active");

        drawer.setAttribute(
            "aria-hidden",
            "false"
        );

        document.body.classList.add(
            "checklist-drawer-open"
        );

    }


    /* =========================================
     * CLOSE DRAWER
     * ========================================= */

    function closeParallelsDrawer() {

        drawer.classList.remove("active");
        overlay.classList.remove("active");

        drawer.setAttribute(
            "aria-hidden",
            "true"
        );

        document.body.classList.remove(
            "checklist-drawer-open"
        );

    }


    /* =========================================
     * PARALLELS BUTTONS
     * ========================================= */

    checklist
        .querySelectorAll(
            ".collection_checklist-parallelsButton"
        )
        .forEach(button => {

            button.addEventListener(
                "click",
                function () {

                    openParallelsDrawer(
                        this.dataset.set
                    );

                }
            );

        });


    /* =========================================
     * DRAWER EVENTS
     * ========================================= */

    closeButton.addEventListener(
        "click",
        closeParallelsDrawer
    );


    overlay.addEventListener(
        "click",
        closeParallelsDrawer
    );


    document.addEventListener(
        "keydown",
        event => {

            if (
                event.key === "Escape" &&
                drawer.classList.contains("active")
            ) {
                closeParallelsDrawer();
            }

        }
    );


    /* =========================================
     * SEARCH PARALLELS
     * ========================================= */

    searchInput.addEventListener(
        "input",
        function () {

            const query =
                this.value
                    .trim()
                    .toLowerCase();


            if (!query) {

                renderParallels(
                    currentParallels
                );

                return;
            }


            const filtered =
                currentParallels.filter(
                    parallel => {

                        return [
                            parallel.name ?? "",
                            parallel.limit ?? "",
                            parallel.odds ?? "",
                            parallel.exclusive ?? ""
                        ]
                            .join(" ")
                            .toLowerCase()
                            .includes(query);

                    }
                );


            renderParallels(
                filtered
            );

        }
    );


})();