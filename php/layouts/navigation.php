<?php
function generate_navigation()
{


    $categories = getCategories();

//print_r($categories);
    ?>
    <div class="nav">
        <div class="nav_header">
            <ul class="nav_header_menu">
                <?php
                foreach ($categories as $index => $category) {
                    ?>
                    <li class="nav_header_menu_category">
                    <span class="menu-button"
                          onclick="openMenu(event, <?= $index ?>)"> <?= htmlspecialchars($category["CategoryName"]) ?></span>
                        <ul class="nav_header_menu_category_subcategory">
                            <?php
                            foreach ($category["SubCategories"] as $subcategory) {
                                ?>
                                <li class="nav_header_menu_category_subcategory_category">
                                    <span><a href="category.php?id=<?=$subcategory["ID"]?>"><?= $subcategory["CategoryName"] ?></a></span>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                    </li>
                    <?php
                }

                ?>
                <a href="userPage.php">Strona Użytkownika</a>
            </ul>
        </div>
    </div>
    <?php

}
