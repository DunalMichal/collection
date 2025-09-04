let buttonMainMenu = -1;

function openMenu(event, menuNumber) {
    event.stopPropagation();

    const menus = document.getElementsByClassName("nav_header_menu_category_subcategory");

    if (buttonMainMenu === menuNumber) {
        menus[menuNumber].style.display = "none";
        buttonMainMenu = -1;
    } else {
        for (let i = 0; i < menus.length; i++) {
            menus[i].style.display = "none";
        }
        menus[menuNumber].style.display = "block";
        buttonMainMenu = menuNumber;
    }
}
