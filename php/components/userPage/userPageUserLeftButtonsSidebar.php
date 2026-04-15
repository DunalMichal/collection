<?php

function generateUserLeftButtonsSidebar(){

?>
    <h2 id="sidebar-title"</h2>

    <nav class="sidebar">
        <ul class="sidebar-menu">
            <li>
                <a href="/dashboard.php" class="sidebar-menu-button">
                    <span aria-hidden="true">🏠</span> Dashboard <span class="muted small">↗</span>
                </a>
<!--                <button type="button" class="sidebar-menu-button" data-action="dashboard">-->
<!--                    <span aria-hidden="true">🏠</span> Dashboard <span class="muted small">↗</span>-->
<!--                </button>-->
            </li>
            <li>
                <a href="/usersCollection.php" class="sidebar-menu-button">
                    <span aria-hidden="true">📚</span> Moje kolekcje <span class="muted small">(Has / Needs)</span>
                </a>
            </li>
            <li>
                <a href="/usersSwaps.php" class="sidebar-menu-button">
                    <span aria-hidden="true">🔁</span> Wymiany / Swap
                </a>
            </li>
            <li>
                <a href="/marketplace.php" class="sidebar-menu-button">
                    <span aria-hidden="true">🛒</span> Marketplace / Sprzedaż
                </a>
            </li>
            <li>
                <a href="/community.php" class="sidebar-menu-button">
                    <span aria-hidden="true">💬</span> Społeczność
                </a>
            </li>
            <li>
                <a href="/scaner.php" class="sidebar-menu-button">
                    <span aria-hidden="true">📷</span> Skaner
                </a>
            </li>
            <li>
                <a href="/overallstatistic.php" class="sidebar-menu-button">
                    <span aria-hidden="true">📈</span> Statystyki kolekcji
                </a>
            </li>
            <li>
                <a href="/settings.php" class="sidebar-menu-button">
                    <span aria-hidden="true">⚙️</span> Ustawienia
                </a>
            </li>
            <li>
                <a href="/help.php" class="sidebar-menu-button">
                    <span aria-hidden="true">❓</span> Pomoc / FAQ
                </a>
            </li>
        </ul>
    </nav>

    <div class="sidebar-quick">
        <div class="sidebar-quick-title">Szybkie linki</div>
        <ul class="sidebar-quick-links">
            <li><a href="#">Moje transakcje</a></li>
            <li><a href="#">Moje powiadomienia</a></li>
            <li><a href="#">Kontakt</a></li>
            <li><a href="#">Ustawienia konta</a></li>
            <li><a href="#">Pomoc</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Regulamin</a></li>
            <li><a href="#">Polityka</a></li>
            <li><a href="#">Mapa Strony</a></li>
        </ul>
    </div>















    <?php

}
?>
