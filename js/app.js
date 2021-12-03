//Mobile Menu Toggle

const toggleBtn = document.querySelector(".nav-toggle");
const mobileMenuContainer = document.querySelector(".mobile-menu-container");
const menu = document.querySelector(".mobile-menu");
const openBtnIcon = document.querySelector(".fa-bars");
const closeBtnIcon = document.querySelector(".fa-times");

toggleBtn.addEventListener("click", function () {
  const containerHeight = mobileMenuContainer.getBoundingClientRect().height;
  const linksHeight = menu.getBoundingClientRect().height;
  closeBtnIcon.classList.toggle("hide");
  openBtnIcon.classList.toggle("hide");

  if (containerHeight === 0) {
    mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  } else {
    mobileMenuContainer.style.height = 0;
  }
});

/*Add classes to .menu-item li*/
const mainMenu = document.querySelector("#menu-main-navigation");
const menuItem = mainMenu.children;
const menuItemArr = Array.from(menuItem);
function addItemClass(item, index) {
  item.classList.add(`my-menu-item-${index}`);
}
menuItemArr.forEach(addItemClass);

/*Add classes to .sub-menu ul*/
const subMenu = document.querySelectorAll(".sub-menu");
const subMenuItems = Array.from(subMenu);

function addClass(item, index) {
  item.classList.add(`my-sub-menu-item-${index}`);
}
subMenuItems.forEach(addClass);

//Replace '.sub-menu' class in mobile nav with '.mobile-sub-nav to make styling them easier
const mobileMenu = document.querySelector(".mobile-menu");
const mobileSubMenu = mobileMenu.querySelectorAll(".sub-menu");
const mobileMenuItemArr = Array.from(mobileSubMenu);
function replaceMobileClassName(item) {
  item.classList.replace("sub-menu", "mobile-sub-menu");
}
mobileMenuItemArr.forEach(replaceMobileClassName);

//append font awsome icon after top level menu items on mobile
const menuParentLink = document.querySelectorAll(
  ".mobile-menu-container .mobile-sub-menu"
);

function insertBefore(el, referenceNode) {
  referenceNode.parentNode.insertBefore(el, referenceNode);
}

//***************************************************/
//VERSION 2 of Mobile Dropdown
//************************************************* */

//add a link and font awsome icons as btn for opening and closing sub nav
menuParentLink.forEach((item) => {
  const openBtn = document.createElement("a");
  const iconPlus = document.createElement("i");
  iconPlus.className = "fa fa-plus";
  openBtn.className = "open";
  openBtn.appendChild(iconPlus);
  insertBefore(openBtn, item);
  const iconMinus = document.createElement("i");
  iconMinus.className = "fa fa-minus";
  iconMinus.classList.add("hide");
  openBtn.appendChild(iconMinus);
});

//variables
const openBtns = document.querySelectorAll(".open");
const mobileDropDown = document.querySelectorAll(".mobile-sub-menu");
const menuSubItem = document.querySelectorAll(".menu-item-has-children");
const iconOpen = document.querySelectorAll(".fa-plus");
const iconClose = document.querySelectorAll(".fa-minus");

//wrap ul.mobile-sub-menu in a div to give it zero height until clicked
mobileDropDown.forEach((item) => {
  const el = document.createElement("div");
  el.classList.add("sub-menu-container");
  el.setAttribute("data-container", "container");
  item.parentNode.insertBefore(el, item);
  el.appendChild(item);
});

const mobileSubMenusContainer = document.querySelectorAll(
  ".sub-menu-container"
);

const contHeight = mobileSubMenusContainer.forEach(function (i) {
  i.style.height = 0;
});

openBtns.forEach(function (btn) {
  //reset the overall menu container ".mobile-menu-container"
  const linksHeight = menu.getBoundingClientRect().height;
  mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  //click it boyo
  btn.addEventListener("click", function (e) {
    //get the sub menu next to the btn clicked
    const clickedMenu = e.currentTarget.nextSibling;
    const clickedOpenIcon = e.currentTarget.children[0];
    const clickedCloseIcon = e.currentTarget.children[1];
    //get the height of the ul.mobile-sub-menu
    const clickedMenuHeight =
      clickedMenu.firstChild.getBoundingClientRect().height;
    //get the height of the menu when sub menu items are closed as this will need to be added to the total menu size once they open

    if (clickedMenu.style.height === "0px") {
      console.log(mobileMenuContainer.style.height);
      mobileSubMenusContainer.forEach(function (i) {
        i.style.height = "0px";
      });
      iconClose.forEach(function (i) {
        i.classList.add("hide");
      });
      iconOpen.forEach(function (i) {
        i.classList.remove("hide");
      });
      clickedMenu.style.height = `${clickedMenuHeight}px`;
      mobileMenuContainer.style.height = `${linksHeight + clickedMenuHeight}px`;
      //close other open sub navs

      //swap open and close icons of the btn clicked
      clickedOpenIcon.classList.add("hide");
      clickedCloseIcon.classList.remove("hide");
    } else {
      clickedMenu.style.height = "0px";
      mobileMenuContainer.style.height = `${linksHeight - clickedMenuHeight}px`;
      clickedOpenIcon.classList.remove("hide");
      clickedCloseIcon.classList.add("hide");
    }
  });
});
