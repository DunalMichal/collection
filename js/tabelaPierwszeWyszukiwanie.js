
function filterTable(){
    const playerNameFilter = document.querySelector('select[name="search_player_name"]').value;

    document.querySelector('tbody tr.main-row').forEach(row=> {
        const cells = row.children;
        const player = cells[1].textContent.trim();
        const team = cells[2].textContent.trim();
        const type = cells[3].textContent.trim();
        const matchPlayer = (playerFilter === "search_player_name") || (player === playerFilter);
        const matchTeam = (teamFilter === "search_team_name") || (team === teamFilter);
        const matchType = (typeFilter === "search_card_type") || (type === typeFilter);

        // Pokaż lub ukryj wiersz i powiązany szczegółowy wiersz
        if (matchPlayer && matchTeam && matchType) {
            row.style.display = "";
            // Pokaż również details-row, jeśli istnieje
            const nextRow = row.nextElementSibling;
            if (nextRow && nextRow.classList.contains('details-row')) {
                nextRow.style.display = "";
            }
        } else {
            row.style.display = "none";
            const nextRow = row.nextElementSibling;
            if (nextRow && nextRow.classList.contains('details-row')) {
                nextRow.style.display = "none";
            }
        }
    });
}