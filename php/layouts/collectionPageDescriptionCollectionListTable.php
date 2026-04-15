<?php
function generateCollectionPageCollectionListTable($basicTableCardsList)
{
    ?>
    <div class="cards-table-container">
        <div class="cards-table-container-table_header">
            <h2>Lista Kart</h2>
            <div class="cards-table-container-table_controls">
                <a href="#" class="buttonSecondaryLink" onclick="setTableMode('basic')">Basic</a>
                <a href="#" class="buttonSecondaryLink" onclick="setTableMode('advanced')">Advanced</a>
                <a href="#" class="buttonSecondaryLink" onclick="setTableMode('detail')">Details</a>
                <a href="#" class="buttonSecondaryLink" onclick="toggleMissing()">Missing</a>
                <button class="buttonSecondaryLink" id="toggle-view">Tryb albumu</button>
            </div>
        </div>

        <div id="collection-content" class="fade-container">
            <table id="cardsTable" class="cards-table-container-main_table fade-element">
                <thead class="cards-table-container-main_table-tableHead" id="tableHead"></thead>
                <tbody class="cards-table-container-main_table-tableBody" id="tableBody"></tbody>
            </table>

            <div id="album-view" class="fade-element hidden"></div>
        </div>
    </div>





    <script>
        console.log(14);
        const cardsData = <?php echo json_encode($basicTableCardsList, JSON_UNESCAPED_UNICODE); ?>;
        const tableHead = document.getElementById('tableHead');
        const tableBody = document.getElementById('tableBody');
        const albumView = document.getElementById('album-view');
        const toggleViewBtn = document.getElementById('toggle-view');
        const table = document.getElementById('cardsTable');

        const variantColor = {
            "Base": "#e0e0e0",
            "Hero": "#ff9800",
            "Limited": "#4caf50",
            "Foil-Green": "#66bb6a",
            "Foil-Blue": "#2196f3",
            "Foil-Purple": "#9c27b0"
        };

        let currentMode = 'basic';
        let showMissingOnly = false;
        let filters = { Name: '', Team: '', Series: '', Type: '' };

        const columnsByMode = {
            basic: [
                {key: 'id', label: '#'},
                {key: 'Name', label: 'Nazwa Karty', filter: true},
                {key: 'Team', label: 'Drużyna', filterSelect: true},
                {key: 'Series', label: 'Rodzaj', filterSelect: true},
                {key: 'Type', label: 'Typ Karty', filterSelect: true},
                {key: 'have', label: 'Mam'},
                {key: 'ratio', label: 'Rarity'}
            ],
            advanced: [
                {key: 'id', label: '#'},
                {key: 'Name', label: 'Nazwa Karty', filter: true},
                {key: 'Team', label: 'Drużyna', filterSelect: true},
                {key: 'Series', label: 'Rodzaj', filterSelect: true},
                {key: 'Type', label: 'Typ Karty', filterSelect: true},
                {key: 'Price', label: 'Cena'},
                {key: 'AvgPrice', label: 'Średnia cena'},
                {key: 'have', label: 'Mam'},
                {key: 'ratio', label: 'Rarity'}
            ],
            detail: [
                {key: 'id', label: '#'},
                {key: 'Name', label: 'Nazwa Karty', filter: true},
                {key: 'Team', label: 'Drużyna'},
                {key: 'Series', label: 'Rodzaj'},
                {key: 'Type', label: 'Typ Karty'},
                {key: 'Description', label: 'Opis'},
                {key: 'have', label: 'Mam'},
                {key: 'ratio', label: 'Rarity'}
            ]
        };

        function setTableMode(mode){
            currentMode = mode;
            createTableHead();
            renderTable();
        }

        // --- Tabela ---
        function createTableHead() {
            const cols = columnsByMode[currentMode];
            let headerHTML = `<tr>${cols.map(c => `<th>${c.label}</th>`).join('')}</tr>`;
            if(currentMode === 'basic' || currentMode === 'advanced'){
                headerHTML += `<tr>${cols.map(c=>{
                    if(c.filter) return `<th><input type="text" oninput="filterByName(this.value)" placeholder="Szukaj..."></th>`;
                    if(c.filterSelect){
                        const uniqueValues = [...new Set(cardsData.map(card=>card[c.key]).filter(v=>v))].sort();
                        const optionsHTML = ['<option value="">Wszystkie</option>'].concat(uniqueValues.map(v=>`<option value="${v}">${v}</option>`)).join('');
                        return `<th><select onchange="filterSelectChange('${c.key}', this.value)">${optionsHTML}</select></th>`;
                    }
                    return '<th></th>';
                }).join('')}</tr>`;
            }
            tableHead.innerHTML = headerHTML;
        }

        function filterByName(val){ filters.Name = val; renderTable(); }
        function filterSelectChange(key, val){ filters[key] = val; renderTable(); }

        function getFilteredData() {
            let data = [...cardsData];
            if(showMissingOnly) data = data.filter(c=>!c.have);
            if(filters.Name) data = data.filter(c=>c.Name?.toLowerCase().includes(filters.Name.toLowerCase()));
            Object.keys(filters).forEach(k=>{
                const val = filters[k];
                if(val && k!=='Name') data = data.filter(c=>String(c[k]).toLowerCase()===val.toLowerCase());
            });
            return data;
        }

        function renderTable(){
            const data = getFilteredData();
            const cols = columnsByMode[currentMode];
            tableBody.innerHTML = data.map(card=>{
                return `<tr>${cols.map(c=>`<td>${c.key==='have'? (card.have?'✓':'') : (card[c.key]??'')}</td>`).join('')}</tr>`;
            }).join('');
        }

        function toggleMissing() {
            showMissingOnly = !showMissingOnly;
            renderTable();
        }

        // --- Album ---
        let currentAlbumPage = 0;
        const slotsPerPage = 18; // 2 strony x 9 slotów

        function renderAlbum() {
            const filtered = getFilteredData();
            albumView.innerHTML = '';

            const book = document.createElement('div');
            book.className = 'album-book';
            albumView.appendChild(book);

            function renderBookPage(pageIndex) {
                book.innerHTML = '';
                const startIdx = pageIndex * slotsPerPage;
                const pageItems = filtered.slice(startIdx, startIdx + slotsPerPage);

                for(let p=0; p<2; p++){
                    const page = document.createElement('div');
                    page.className = 'album-page';
                    page.style.height = 'calc(3 * (100% / 3 + 12px))'; // stała wysokość, 3 karty wysokości

                    for(let i=0; i<9; i++){
                        const idx = p*9 + i;
                        const slot = document.createElement('div');
                        slot.className = 'album-slot';

                        if(pageItems[idx]){
                            const item = pageItems[idx];
                            slot.innerHTML = `
                        <div class="album-sq">
                            <span style="background:${variantColor[item.Type] || '#ccc'}"></span>
                            ${item.have?'<div class="have-badge">✓</div>':''}
                        </div>
                        <div class="album-meta">
                            <strong>${item.id}. ${item.Name}</strong>
                            <div>${item.Team || ''} • ${item.Type || ''}</div>
                        </div>`;
                        } else {
                            slot.classList.add('empty');
                            slot.innerHTML = `
                        <div class="album-sq empty-slot">
                            <span></span>
                        </div>`;
                        }

                        page.appendChild(slot);
                    }

                    book.appendChild(page);
                }
            }

            // Nawigacja
            const totalPages = Math.ceil(filtered.length / slotsPerPage);

            const prevBtn = document.createElement('button');
            prevBtn.className = 'album-nav';
            prevBtn.textContent = '◀';
            prevBtn.onclick = () => {
                currentAlbumPage = (currentAlbumPage - 1 + totalPages) % totalPages;
                renderBookPage(currentAlbumPage);
            };

            const nextBtn = document.createElement('button');
            nextBtn.className = 'album-nav';
            nextBtn.textContent = '▶';
            nextBtn.onclick = () => {
                currentAlbumPage = (currentAlbumPage + 1) % totalPages;
                renderBookPage(currentAlbumPage);
            };

            albumView.appendChild(prevBtn);
            albumView.appendChild(nextBtn);

            renderBookPage(currentAlbumPage);
        }

        // --- Przełączanie widoku ---
        let view = 'table';
        toggleViewBtn.addEventListener('click', ()=>{
            if(view==='table'){
                renderAlbum();
                table.classList.add('fade-out');
                setTimeout(()=>{
                    table.classList.add('hidden');
                    table.classList.remove('fade-out');
                    albumView.classList.remove('hidden');
                    albumView.classList.add('fade-in');
                    toggleViewBtn.textContent = 'Tryb listy';
                    view='album';
                },300);
            } else {
                albumView.classList.add('fade-out');
                setTimeout(()=>{
                    albumView.classList.add('hidden');
                    albumView.classList.remove('fade-out');
                    table.classList.remove('hidden');
                    table.classList.add('fade-in');
                    toggleViewBtn.textContent = 'Tryb albumu';
                    view='table';
                },300);
            }
        });

        // --- Inicjalizacja ---
        createTableHead();
        renderTable();
    </script>
    <?php
}
?>
