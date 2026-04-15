<?php

function generateCardsTableView($selectedCollectionID)
{
    ?>

    <div class="cards-view cards-view--table">
        <button class="btn secondary small" id="show-more">📘 Więcej o kolekcji</button>
        <div id="more-section" class="hidden" style="margin-top:12px">
            <div class="tabs">
                <div class="tab active" data-tab="cover">Okładka i opis</div>
                <div class="tab" data-tab="limited">Karty limitowane</div>
                <div class="tab" data-tab="products">Produkty</div>
                <div class="tab" data-tab="missing">Eksport brakujących</div>
                <div class="tab" data-tab="special">Specjalne karty</div>
            </div>

            <!-- Tab Contents -->
            <div class="tab-content active" id="cover" style="display:flex;gap:12px;align-items:flex-start">
                <img src="https://via.placeholder.com/120x180?text=Okładka" alt="Okładka" style="border-radius:10px;">
                <div>
                    <p>Topps UEFA Euro 2024 — Match Attax. Oficjalna kolekcja zawiera karty bazowe, Hero, Limited oraz
                        foil.</p>
                </div>
            </div>
            <div class="tab-content" id="limited">
                <ul>
                    <li>Limit A – 50 kart</li>
                    <li>Limit B – 25 kart</li>
                    <li>Limit C – 10 kart</li>
                </ul>
            </div>
            <div class="tab-content" id="products">
                <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(160px,1fr)); gap:12px;">
                    <div style="background:#f0f0f0; padding:12px; border-radius:8px;">
                        <strong>Starter Pack</strong>
                        <p>Zawiera: album, 5 kart startowych, 1 saszetka.</p>
                    </div>
                    <div style="background:#f0f0f0; padding:12px; border-radius:8px;">
                        <strong>Multipack</strong>
                        <p>Zawiera: 5 saszetek + 1 karta limitowana</p>
                    </div>
                    <div style="background:#f0f0f0; padding:12px; border-radius:8px;">
                        <strong>Duża Puszka</strong>
                        <p>10 kart + 2 inserty foil</p>
                    </div>
                    <div style="background:#f0f0f0; padding:12px; border-radius:8px;">
                        <strong>Mala Puszka</strong>
                        <p>5 kart + 1 insert foil</p>
                    </div>
                    <div style="background:#f0f0f0; padding:12px; border-radius:8px;">
                        <strong>Saszetka</strong>
                        <p>1 karta bazowa + szansa na insert foil</p>
                    </div>
                    <div style="background:#f0f0f0; padding:12px; border-radius:8px;">
                        <strong>Display Box</strong>
                        <p>Zawiera 24 saszetki, gwarantowane inserty limitowane</p>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="missing">
                <p>Możesz szybko skopiować listę brakujących kart do schowka lub notatnika:</p>
                <button class="btn small" onclick="copyMissing()">Kopiuj brakujące</button>
                <textarea id="missing-list" class="hidden" style="width:100%;height:120px;margin-top:8px;"></textarea>
            </div>
            <!-- Nowa zakładka Specjalne karty -->
            <div class="tab-content" id="special">
                <h4>Kategorie kart specjalnych</h4>
                <table>
                    <thead>
                    <tr>
                        <th>Kategoria</th>
                        <th>Ilość</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Golden Ballers</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Ultimates</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Captains</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Fan Favourites</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Safe Hands</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Rock Solid</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Enforcers</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Non Stop</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Pass Masters</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Wing Wizards</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Game Changers</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Lightning</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Fresh Talent</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Signature Cards</td>
                        <td>40</td>
                    </tr>
                    </tbody>
                </table>

                <h4>Parallels / Kolory</h4>
                <p>(Crystal Crest, Adrenalyn Rush, Midnight, Chemistry, Pure Class)</p>
                <table>
                    <thead>
                    <tr>
                        <th>Typ</th>
                        <th>Liczba</th>
                        <th>Black</th>
                        <th>Gold</th>
                        <th>Red</th>
                        <th>Blue</th>
                        <th>Purple</th>
                        <th>Orange</th>
                        <th>Green</th>
                        <th>Yellow</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Crystal Crest</td>
                        <td>20</td>
                        <td>1</td>
                        <td>5</td>
                        <td>25</td>
                        <td>50</td>
                        <td>99</td>
                        <td>149</td>
                        <td>199</td>
                        <td>299</td>
                    </tr>
                    <tr>
                        <td>Adrenalyn Rush</td>
                        <td>20</td>
                        <td>1</td>
                        <td>5</td>
                        <td>25</td>
                        <td>50</td>
                        <td>99</td>
                        <td>149</td>
                        <td>199</td>
                        <td>299</td>
                    </tr>
                    <tr>
                        <td>Midnight</td>
                        <td>20</td>
                        <td>1</td>
                        <td>5</td>
                        <td>25</td>
                        <td>50</td>
                        <td>99</td>
                        <td>149</td>
                        <td>199</td>
                        <td>299</td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td>20</td>
                        <td>1</td>
                        <td>5</td>
                        <td>25</td>
                        <td>50</td>
                        <td>99</td>
                        <td>149</td>
                        <td>199</td>
                        <td>299</td>
                    </tr>
                    <tr>
                        <td>Pure Class</td>
                        <td>20</td>
                        <td>1</td>
                        <td>5</td>
                        <td>25</td>
                        <td>50</td>
                        <td>99</td>
                        <td>149</td>
                        <td>199</td>
                        <td>299</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <?php
        //        $collectionData = getCollectionData($selectedCollectionID);
        $cardTypes = getCardTypesInCollection($selectedCollectionID);

        $cardCategories = getCardCategoriesInCollection($selectedCollectionID);

        $collectionData = getCardsFromDatabase($selectedCollectionID);
        echo '<pre>';
        print_r($collectionData);
        echo '</pre>';
        //    generate_collectionTableBasic($collectionData);
        //    generate_collectionTableAdvanced($collectionData);
        //    generate_collectionTableBasic($collectionData);
        ?>

        <!--    to powyżej do zrobienia później -->


        <!-- Tabela i album -->
        <div class="card">
            <div class="card-controls">
                <div class="card-controls-search">
                    <input class="card-controls-input_select" id="search"
                           placeholder="Szukaj po numerze, nazwisku lub kraju..."/>
                </div>

                <select id="filter-type" class="card-controls-input_select">
                    <option value="">Typy</option>
                    <?php foreach ($cardTypes as $type): ?>
                        <option value="<?= htmlspecialchars($type['ID']) ?>">
                            <?= htmlspecialchars($type['Name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>


                <select id="filter-category" class="card-controls-input_select">
                    <option value="">Kategoria</option>
                    <?php foreach ($cardCategories as $category): ?>
                        <option value="<?= htmlspecialchars($category['ID']) ?>">
                            <?= htmlspecialchars($category['Value']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <select id="sort-by" class="card-controls-input_select">
                    <option value="num-asc">Sortuj: numer ↑</option>
                    <option value="num-desc">Sortuj: numer ↓</option>
                    <option value="price-asc">Cena: najniższa</option>
                    <option value="price-desc">Cena: najwyższa</option>
                </select>
                <div class="card-controls-buttons">
                    <button class="btn secondary small" id="toggle-view">Tryb albumu</button>
                    <button class="btn small" id="toggle-mode">Free</button>
                </div>

            </div>


            <div class="table-main" id="table-view">
                <table id="checklist">
                    <thead>
                    <tr>
                        <th style="width:20px">#</th>
                        <th style="width:20px">Unique ID</th>
                        <th style="width:80px">Nazwa</th>
                        <th style="width:80px">Rodzaj</th>
                        <th style="width:80px">Wariant</th>
                        <th style="width:110px">Status<br>Masz/Brakuje</th>
                        <th style="width:240px">Akcje<br>+1 / -1 / Wishlist</th>
                        <th style="width:110px">Inne</th>
                    </tr>
                    </thead>
                    <tbody id="tbody-checklist"></tbody>
                </table>
            </div>

            <div id="album-view" class="album-grid hidden"></div>
        </div>
    </div>


    <br><br>
    <footer>Demo kolekcji — interaktywne filtry, sortowanie, modal karty, tryb albumu, animacje.</footer>
    <br><br><br><br>


    <!-- MODAL -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="modal-close" id="modal-close">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <script>
        console.log(12);
        /* --- dane przykładowe 20 kart --- */
        const ALL_CARDS = <?= json_encode($collectionData, JSON_UNESCAPED_UNICODE) ?>;
        console.log('ALL_CARDS:', ALL_CARDS);

        const tbody = document.getElementById('tbody-checklist');
        const filterType = document.getElementById('filter-type');
        const filterCategory = document.getElementById('filter-category');
        let filteredCards = [...ALL_CARDS];


        function renderTable(cards) {
            tbody.innerHTML = '';
            console.log('consolelogcards', cards);
            cards.forEach((card,index) => {
                console.log('card:', card);
                const tr = document.createElement('tr');
                tr.innerHTML = `
            <td>${card.CardCollectionID}</td>
            <td>${card.cardUniqueID ?? ''}</td>
            <td>${card.Name ?? ''}</td>
            <td>${card.TypeName ?? ''}</td>
            <td>${card.VariantName ?? ''}</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        `;
                tbody.appendChild(tr);
            });
        }

        function applyFilters() {
            const type = filterType.value;
            const category = filterCategory.value;

            filteredCards = ALL_CARDS.filter(card => {
                if (type && String(card.TypeID) !== type) return false;
                if (category && String(card.CategoryID) !== category) return false;
                return true;
            });

            renderTable(filteredCards);
        }



        // filterType.addEventListener('change', applyFilters);
        // filterCategory.addEventListener('change', applyFilters);

        // 🔥 START
        renderTable(ALL_CARDS);



        const data = [
            <?=json_encode($collectionData)?>
            // {
            //     num: 2,
            //     name: "Kamil Jóźwiak",
            //     type: "Hero",
            //     country: "Poland",
            //     price: 3.50,
            //     avg: 3.20,
            //     have: false,
            //     variant: "Hero"
            // },

        ];
        const variantColor = {
            "Base": "#d9d9d9",
            "Hero": "#8cbaff",
            "Limited": "#ffdf80",
            "Foil-Green": "#8fff9f",
            "Foil-Blue": "#4fa8ff",
            "Foil-Purple": "#c89fff"
        };




        let filtered = [...data];
        let view = 'table';
        let mode = 'free';
        console.log("CCCCDDDDDDDDEEEEEEEEEEEEE");
    </script>
    <script>
        console.log(13);
        const album = document.getElementById('album-view');
        const searchInput = document.getElementById('search');
        const fType = document.getElementById('filter-type');

        const fCountry = document.getElementById('filter-category');
        const sortBy = document.getElementById('sort-by');
        const toggleViewBtn = document.getElementById('toggle-view');
        const toggleModeBtn = document.getElementById('toggle-mode');
        const premiumBanner = document.getElementById('premium-banner');

        const showMoreBtn = document.getElementById('show-more');
        const moreSection = document.getElementById('more-section');
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');



        //     function renderTable(list) {
        //         console.log(list);
        //         tbody.innerHTML = '';
        //         list.forEach(item => {
        //             const tr = document.createElement('tr');
        //             tr.innerHTML = `
        //   <td>${item?.cardUniqueID}</td>
        //   <td>${item?.CardName}</td>
        //   <td>${item?.TypeName}</td>
        //   <td>${item?.VariantName}</td>
        //   <td>${item?.userCardStatus}</td>
        //   <td>
        //     <button class="btn small secondary premium-only" onclick="addWishlist(this)">Wishlist</button>
        //     <button class="btn small secondary premium-only" onclick="proposeTrade(this)">Wymiana</button>
        //   </td>
        //   <td>${item?.other}</td>
        //
        // `;
        //             tr.addEventListener('click', () => showModal(item));
        //             tbody.appendChild(tr);
        //         });
        //     }


        //     function renderAlbum(list) {
        //         album.innerHTML = '';
        //         list.forEach(item => {
        //             const div = document.createElement('div');
        //             div.className = 'album-card';
        //             const haveBadge = item.have ? '<div style="position:absolute;right:8px;top:8px;background:#fff;padding:4px;border-radius:6px;font-size:12px">✓</div>' : '';
        //             div.innerHTML = `
        //   <div class="album-sq" style="position:relative">
        //     <span style="background:${variantColor[item.variant]}"></span>
        //     ${haveBadge}
        //   </div>
        //   <div class="album-meta"><strong>${item.num}. ${item.name}</strong><div style="font-size:12px;color:var(--muted)">${item.country} • ${item.type}</div></div>
        // `;
        //             div.addEventListener('click', () => showModal(item));
        //             album.appendChild(div);
        //         });
        //     }

        function applyFiltersAndSort() {
            const q = searchInput.value.trim().toLowerCase();
            const type = fType.value;
            const country = fCountry.value;
            const sort = sortBy.value;
            filtered = data.filter(item => {
                if (type && item.type !== type) return false;
                if (country && item.country !== country) return false;
                if (q) {
                    const text = `${item.num} ${item.name} ${item.country} ${item.type}`.toLowerCase();
                    if (!text.includes(q)) return false;
                }
                return true;
            });
            if (sort === 'num-asc') filtered.sort((a, b) => a.num - b.num);
            else if (sort === 'num-desc') filtered.sort((a, b) => b.num - a.num);
            else if (sort === 'price-asc') filtered.sort((a, b) => a.price - b.price);
            else if (sort === 'price-desc') filtered.sort((a, b) => a.price - b.price);
            // renderTable(filtered);
            renderAlbum(filtered);
            recalcProgress();
        }
        function toggleHave(btn) {
            const tr = btn.closest('tr');
            const num = Number(tr.cells[0].innerText);
            const item = data.find(d => d.num === num);
            item.have = !item.have;
            applyFiltersAndSort();
        }

        function addWishlist(btn) {
            alert('Dodano do wishlisty (demo) — Premium');
        }

        function proposeTrade(btn) {
            alert('Formularz wymiany (demo) — Premium');
        }

        function toggleView() {
            const tableView = document.getElementById('table-view');
            const albumView = document.getElementById('album-view');
            if (view === 'table') {
                tableView.style.opacity = 0;
                setTimeout(() => {
                    tableView.classList.add('hidden');
                    albumView.classList.remove('hidden');
                    albumView.style.opacity = 1;
                }, 300);
                toggleViewBtn.textContent = 'Tryb listy';
                view = 'album';
            } else {
                albumView.style.opacity = 0;
                setTimeout(() => {
                    albumView.classList.add('hidden');
                    tableView.classList.remove('hidden');
                    tableView.style.opacity = 1;
                }, 300);
                toggleViewBtn.textContent = 'Tryb albumu';
                view = 'table';
            }
        }

        function updateMode() {
            const premiumElems = document.querySelectorAll('.premium-only');
            if (mode === 'free') {
                toggleModeBtn.textContent = 'Free';
                premiumBanner.style.display = 'flex';
                premiumElems.forEach(e => e.classList.add('locked'));
            } else {
                toggleModeBtn.textContent = 'Premium';
                premiumBanner.style.display = 'none';
                premiumElems.forEach(e => e.classList.remove('locked'));
            }
        }

        function goPremium() {
            alert('Przejdź do Premium — demo');
        }

        function recalcProgress() {
            const total = data.length;
            const have = data.filter(d => d.have).length;
            const pct = Math.round((have / total) * 100);
            document.getElementById('progress-fill').style.width = pct + '%';
            document.getElementById('progress-text').textContent = `Ukończono: ${have} / ${total} (${pct}%)`;
        }

        function showModal(item) {
            document.getElementById('modal-body').innerHTML = `<h3>${item.num}. ${item.name}</h3><p>Typ: ${item.type}</p><p>Kraj: ${item.country}</p><p>Cena: ${item.price.toFixed(2)} € | Średnia: ${item.avg.toFixed(2)} €</p><p>Status: ${item.have ? 'Masz' : 'Brakuje'}</p>`;
            document.getElementById('modal').classList.add('show');
        }

        document.getElementById('modal-close').addEventListener('click', () => document.getElementById('modal').classList.remove('show'));
        document.getElementById('modal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('modal')) document.getElementById('modal').classList.remove('show');
        });


        searchInput.addEventListener('input', () => applyFiltersAndSort());
        fType.addEventListener('change', () => applyFiltersAndSort());
        fCountry.addEventListener('change', () => applyFiltersAndSort());
        sortBy.addEventListener('change', () => applyFiltersAndSort());
        toggleViewBtn.addEventListener('click', () => toggleView());
        toggleModeBtn.addEventListener('click', () => {
            mode = (mode === 'free') ? 'premium' : 'free';
            updateMode();
        });


        showMoreBtn.addEventListener('click', () => {
            moreSection.classList.toggle('hidden');
            showMoreBtn.textContent = moreSection.classList.contains('hidden') ? '📘 Więcej o kolekcji' : '⬆️ Ukryj opis';
        });

        function copyMissing() {
            const missing = data.filter(d => !d.have).map(d => `${d.num}. ${d.name} [${d.type}] (${d.country})`).join('\n');
            const textarea = document.getElementById('missing-list');
            textarea.value = missing;
            textarea.classList.remove('hidden');
            textarea.select();
            document.execCommand('copy');
            alert(`Skopiowano ${data.filter(d => !d.have).length} brakujących kart do schowka.`);
        }


        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                const sel = tab.dataset.tab;
                tabContents.forEach(tc => tc.classList.remove('active'));
                document.getElementById(sel).classList.add('active');
            });
        });

        applyFiltersAndSort();
        updateMode();
    </script>
    <?php
}

?>


