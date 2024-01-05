var submenuStatus = {
    menu: false,
    cart: false,
    order: false
};

function openNav(menu) {
    closeAllSubmenus();

    // Menutup submenu yang sudah terbuka
    if (submenuStatus[menu]) {
        document.getElementById(menu + 'Collapse').classList.remove('show');
        submenuStatus[menu] = false;
    } else {
        // Membuka sidebar
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

        // Membuka submenu yang diklik
        document.getElementById(menu + 'Collapse').classList.add('show');
        submenuStatus[menu] = true;
    }
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";

    closeAllSubmenus();
}

function closeAllSubmenus() {
    var subMenus = document.querySelectorAll('.sub-menu');
    subMenus.forEach(function(subMenu) {
        if (subMenu.classList.contains('show')) {
            subMenu.classList.remove('show');
        }
    });

    submenuStatus.menu = false;
    submenuStatus.cart = false;
    submenuStatus.order = false;
}

document.addEventListener('click', function (event) {
    var menuCollapse = document.getElementById('menuCollapse');
    var cartCollapse = document.getElementById('cartCollapse');
    var orderCollapse = document.getElementById('orderCollapse');

    if (!event.target.closest('#menuCollapse') && !event.target.closest('#cartCollapse') && !event.target.closest('#orderCollapse')) {
        closeAllSubmenus();
    }
});
