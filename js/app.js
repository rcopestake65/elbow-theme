const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");

/* Toggle mobile menu */
function toggleMenu() {
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");

    // adds the menu (hamburger) icon
    toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
  } else {
    menu.classList.add("active");

    // adds the close (x) icon
    toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
  }
}

/* Event Listener */
toggle.addEventListener("click", toggleMenu, false);

const items = document.querySelectorAll(".menu-item");

/* Activate Submenu */
function toggleItem() {
  if (this.classList.contains("sub-menu-active")) {
    this.classList.remove("sub-menu-active");
  } else if (menu.querySelector(".sub-menu-active")) {
    menu.querySelector(".sub-menu-active").classList.remove("sub-menu-active");
    this.classList.add("sub-menu-active");
  } else {
    this.classList.add("sub-menu-active");
  }
}

/* Event Listeners */
for (let item of items) {
  if (item.querySelector(".sub-menu")) {
    item.addEventListener("mouseenter", toggleItem, false);
    item.addEventListener("keypress", toggleItem, false);
  }
}

/* Close Submenu From Anywhere */
function closeSubmenu(e) {
  let isClickInside = menu.contains(e.target);

  if (!isClickInside && menu.querySelector(".sub-menu-active")) {
    menu.querySelector(".sub-menu-active").classList.remove("sub-menu-active");
  }
}

/* Event listener */
document.addEventListener("click", closeSubmenu, false);
