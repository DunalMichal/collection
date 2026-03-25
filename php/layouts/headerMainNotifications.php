<?php

function generateHeaderMainNotifications() {

    ?>
    <div class="notifications">
        <div class="log">
            <div class="log-buttons">
                <?php
                if (session_status() === PHP_SESSION_NONE || empty($_SESSION["ID"]))  {
                    ?>
                    <a href="login.php" class="log-buttons-login">Zaloguj</a>
                    <a href="register.php" class="log-buttons-register">Zarejestruj</a>
                    <?php
                }
                else {
                    ?>
<!--                        <button class="log-buttons-logout">Wyloguj</button>-->
                    <a href="logout.php" class="log-buttons-logout">Wyloguj</a>
                    <?php
                }
                ?>
            </div>
        </div>


        <div class="notifications-user">
            <img src="" alt="avatar"
                 class="notifications-user-placeholder">
            <div class="notifications-user-info">
                <div class="notifications-user-name">DemoUser</div>
                <div class="notifications-user-stats">lvl 12</div>
                <div class="notifications-user-stats">⭐ 4.7</div>
            </div>
            <button class="notifications-button">🔔 <span id="notification-count">2</span></button>
        </div>
    </div>

<?php
}