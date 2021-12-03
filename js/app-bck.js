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

//const items = document.querySelectorAll(".menu-item");

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
//const location = document.querySelectorAll('.mobile-sub-menu');

function insertBefore(el, referenceNode) {
  referenceNode.parentNode.insertBefore(el, referenceNode);
}

menuParentLink.forEach((item) => {
  const openBtn = document.createElement("a");
  openBtn.setAttribute("data-button", "button");
  const icon = document.createElement("i");
  icon.className = "fa fa-plus";
  openBtn.className = "open";
  openBtn.appendChild(icon);
  insertBefore(openBtn, item);
  //console.log(openBtn);

  //item.insertBefore(openBtn, menuParentLink);
});

// //open mobile sub nav
const openBtns = document.querySelectorAll(".open");
const mobileDropDown = document.querySelectorAll(".mobile-sub-menu");
const menuSubItem = document.querySelectorAll(".menu-item-has-children");

//wrap ul.mobile-sub-menu in a div to give it zero height until clicked
mobileDropDown.forEach((item) => {
  const el = document.createElement("div");
  el.classList.add("sub-menu-container");
  el.setAttribute("data-container", "container");

  item.parentNode.insertBefore(el, item);
  el.appendChild(item);
  //console.log(el);
});
//***************************************************/
//VERSION 2 of Mobile Dropdown
//************************************************* */

// mobileSubMenusContainer.forEach(function (item) {
//   const mobileSubMenuContainerHeight = item.getBoundingClientRect().height;
//   console.log(mobileSubMenuContainerHeight);
// });
// const mobileSubMenuContainerHeight =
//   mobileSubMenuContainer.getBoundingClientRect().height;

let subMenuHeightArr = [];
let clickedMenuArr = [];
let subMenuContHeightArr = [];
let subMenuContainerHeight = 0;

const mobileSubMenusContainer = document.querySelectorAll(
  ".sub-menu-container"
);
const contHeight = mobileSubMenusContainer.forEach(function (i) {
  i.style.height = 0;
});
function zero(i) {
  return i <= 0;
}
function setZero(i) {
  return (i = 0);
}
openBtns.forEach(function (btn) {
  btn.addEventListener("click", function (e) {
    //get the sub menu next to the btn clicked
    const clickedMenu = e.currentTarget.nextSibling;
    const clickedMenuHeight =
      e.currentTarget.parentElement.children[2].firstChild.getBoundingClientRect()
        .height;
    console.log(clickedMenuHeight);
    //clickedMenu.style.height = "0px";
    //get the height of the menu when sub menu items are closed as this will need to be added to the total menu size once they open
    const linksHeight = menu.getBoundingClientRect().height;
    //get the height of the sub menu
    const subMenusHeight = document.querySelectorAll(".mobile-sub-menu");
    subMenusHeight.forEach(function (subMenu) {
      let subMenuHeight = subMenu.getBoundingClientRect().height;
      console.log(subMenuHeight);
      // //create an array of the sub menus
      // clickedMenuArr.push(subMenu);
      // //create an array of the sub menu heights
      // subMenuHeightArr.push(subMenuHeight);
    });

    if (clickedMenu.style.height === "0px") {
      clickedMenu.style.height = `${clickedMenuHeight}px`;
      mobileMenuContainer.style.height = `${linksHeight + clickedMenuHeight}px`;
    } else {
      clickedMenu.style.height = "0px";
    }
  });
});
