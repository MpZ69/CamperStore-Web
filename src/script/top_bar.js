function getListMenu(activeTopBar) {
    var listMenu = ["Home", "List Produk"];
    var menuListHTML = "";

    for (var i = 0; i < listMenu.length; i++) {
        if (listMenu[i] === activeTopBar) {
            menuListHTML += `<li><a class="active" href="../${listMenu[i]}/index.php">${listMenu[i]}</a></li>`;
        } else {
            menuListHTML += `<li><a href="../${listMenu[i]}/index.php">${listMenu[i]}</a></li>`;
        }
    }

    return menuListHTML;
}

function getTopBar(activeTopBar) {
    var menuList = getListMenu(activeTopBar);

    var htmlCode = `
    <nav>
        <label class="logo">
            <img src="../logo.png" alt="">
        </label>
        <ul>
            ${menuList}
        </ul>
    </nav>
    `;

    return htmlCode;
}

