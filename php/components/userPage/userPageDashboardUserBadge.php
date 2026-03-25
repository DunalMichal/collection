<?php

function generateUserBadge()
{
    ?>

    <div class="user_badge">
        <img class="user_badge-avatar" src="images/graphics/mainLogo.jpg" alt="avatar">
        <div class="user_badge-profile">
            <div class="user_badge-profile-name"><?=$_SESSION["Nick"]?></div>
            <div class="user_badge-profile-ratings">Reputacja: 4.7 • Poziom: 12</div>
            <div class="user_badge-profile-stats">
                <span class="user_badge-profile-stats-logo">PRO</span>
                <span class="user_badge-profile-stats-text">Aktywny: 142 dni</span>
            </div>
        </div>
    </div>

<!--user -> cardlist -> card -> collectionList -- ile kolekcjie-->
<!--user -> cardlist -> card -> collectionList -> coletion -- jelsi chce nazwe-->
    <?php
}

?>
