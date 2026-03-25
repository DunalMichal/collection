function toggleSubRows(mainRow) {
    let nextRow = mainRow.nextElementSibling;
    while (nextRow && nextRow.classList.contains("collectionTableAdvanced-mainRow-subRow")) {
        nextRow.style.display = (nextRow.style.display === "table-row") ? "none" : "table-row";
        nextRow = nextRow.nextElementSibling;
    }
}