function productFilter() {
 // open categry
let filterCategory = document.querySelectorAll(".filter-category");
let filterList = document.querySelectorAll(".filter-list");
let listPadding = 18;
// fist element always open 
filterList[0].style.height = (filterList[0].scrollHeight + listPadding) + 'px';
filterList[0].style.maxHeight = (filterList[0].scrollHeight + listPadding) + 'px';

//
for (let i = 0; i < filterCategory.length; i++) {
  filterCategory[i].onclick = function (e) {
    let filterListHeight = filterList[i].scrollHeight;
    let paddingB = 18;
    console.log(e.target);
    if (!e.target.closest(".active")) {
      filterCategory[i].classList.add('active');
      if(filterListHeight >= 300){
        filterList[i].style.height = Math.ceil(filterListHeight / 2) + paddingB + listPadding + 'px';
        filterList[i].style.maxHeight = filterListHeight + listPadding + 'px';
        filterList[i].style.overflowY = `auto`;
      }else {
        filterList[i].style.height = filterListHeight + listPadding + 'px';
        filterList[i].style.maxHeight = filterListHeight + listPadding + 'px';
      }
    } else {
      filterCategory[i].classList.remove('active');
      filterList[i].style.maxHeight = '0';
    }
  };
}
}
productFilter();

// open the menu sidebar
function menuSidebar(className) {
  let menuClassName = `.${className}`;
  let menuSidebar = document.querySelector(menuClassName);
  let headerBar = document.querySelector(".header-bar");
  let overlay = document.querySelector(".overlay");
  let hiddenBodyScollbar = document.querySelector("body");
  headerBar.onclick = function () {
    menuSidebar.style.transform = `translateX(0)`;
    menuSidebar.style.opacity = `1`;
    overlay.style.display = `block`;
    hiddenBodyScollbar.style.overflowY = `hidden`;
  };
}
menuSidebar("header-menu-sidebar");
// close the menu sidebar
function closeMenuSidebar(className) {
  let menuClassName = `.${className}`;
  let menuSidebar = document.querySelector(menuClassName);
  let overlay = document.querySelector(".overlay");
  let hiddenBodyScollbar = document.querySelector("body");
  overlay.onclick = function () {
    console.log("HEHE");
    menuSidebar.style.transform = `translateX(-100%)`;
    menuSidebar.style.opacity = `0`;
    overlay.style.display = `none`;
    hiddenBodyScollbar.style.overflowY = `auto`;
  };
}
closeMenuSidebar("header-menu-sidebar");
// bắt sự kiện onscoll ở trình duyệt để hiển thị menu
function hiddenMenubar() {
  document.onscroll = function () {
    const scollTop = window.scrollY || document.documentElement.scrollTop;
    const header = document.querySelector(".header");
    if (scollTop >= 200) {
      header.classList.add("nav-active");
      header.style.justifyContent = `space-between`;
    } else {
      header.classList.remove("nav-active");
      header.style.justifyContent = ``;
    }
  };
}
hiddenMenubar();
