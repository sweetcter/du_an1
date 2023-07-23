function productFilter() {
  // open categry
  let filterCategory = document.querySelectorAll(".filter-category");
  let filterList = document.querySelectorAll(".filter-list");
  let listPadding = 18;
  // fist element always open
  filterList[0].style.height = filterList[0].scrollHeight + listPadding + "px";
  filterList[0].style.maxHeight =
    filterList[0].scrollHeight + listPadding + "px";

  //
  for (let i = 0; i < filterCategory.length; i++) {
    filterCategory[i].onclick = function (e) {
      let filterListHeight = filterList[i].scrollHeight;
      let paddingB = 18;
      console.log(e.target);
      if (!e.target.closest(".active")) {
        filterCategory[i].classList.add("active");
        if (filterListHeight >= 300) {
          filterList[i].style.height =
            Math.ceil(filterListHeight / 2) + paddingB + listPadding + "px";
          filterList[i].style.maxHeight = filterListHeight + listPadding + "px";
          filterList[i].style.overflowY = `auto`;
        } else {
          filterList[i].style.height = filterListHeight + listPadding + "px";
          filterList[i].style.maxHeight = filterListHeight + listPadding + "px";
        }
      } else {
        filterCategory[i].classList.remove("active");
        filterList[i].style.maxHeight = "0";
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
let overlay = document.querySelector(".overlay");
let hiddenBodyScollbar = document.querySelector("body");

function closeMenuSidebar(className) {
  let menuClassName = `.${className}`;
  let menuSidebar = document.querySelector(menuClassName);
  overlay.onclick = function () {
    menuSidebar.style.transform = `translateX(-100%)`;
    menuSidebar.style.opacity = `0`;
    overlay.style.display = `none`;
    if (modal1.style.display === "block") {
      modal1.style.display = "none";
    }
    if (signUp.style.display === "block") {
      signUp.style.display = "none";
    }
    hiddenBodyScollbar.style.overflowY = `auto`;
  };
}
closeMenuSidebar("header-menu-sidebar");
// click overlay close register
overlay.addEventListener("click", function () {
  if (signUp.style.top === "0px") {
    signUp.style.top = "-150%";
    signUp.style.opacity = "0";
  }
});

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
function hiddenOverlay() {
  overlay.style.display = `none`;
}
const openModalBtn = document.getElementById("open-modal-btn");
const modal1 = document.getElementById("my-modal");
const closeBtn = document.querySelector(".sign-in-close");
const form = document.querySelector("form");
const message = document.getElementById("message");

openModalBtn.addEventListener("click", () => {
  modal1.style.display = "block";
  let menuSidebar = document.querySelector(".header-menu-sidebar");
  let hiddenBodyScollbar = document.querySelector("body");
  menuSidebar.style.transform = `translateX(-100%)`;
  menuSidebar.style.opacity = `1`;
  hiddenBodyScollbar.style.overflowY = `auto`;
});

closeBtn.addEventListener("click", () => {
  modal1.style.display = "none";
  overlay.style.display = `none`;
});

let openRegister = document.getElementById("register-button");
let signUp = document.getElementById("register-modal");
let closeButton = document.getElementById("close-button");

openRegister.onclick = function () {
  debugger;
  let menuSidebar = document.querySelector(".header-menu-sidebar");
  signUp.style.top = "0";
  signUp.style.opacity = "1";
  menuSidebar.style.transform = `translateX(-100%)`;
  menuSidebar.style.opacity = `1`;
};
const openQuen = document.getElementById("openQuen");
const modalQuen = document.getElementById("quen-modal");
const closeQuen = document.getElementsByClassName("close-quen");

openQuen.onclick = function () {
  modalQuen.style.display = "block";
  let menuSidebar = document.querySelector(".header-menu-sidebar");
  modalQuen.style.top = "0";
  modalQuen.style.opacity = "1";
  menuSidebar.style.transform = `translateX(-100%)`;
  menuSidebar.style.opacity = `1`;
};
// click overlay
// overlay.addEventListener = function () {
//   console.log("ok");

// }
// close register
let closeRegister = document.querySelector("#close-button");
closeRegister.onclick = function () {
  hiddenOverlay();
  signUp.style.top = "-150%";
  signUp.style.opacity = "0";
};
// end close register

// increase value
function increaseValue() {
  let increaseValue = document.querySelector("#favoriteProduct-inc-plus");
  let favoriteProductQuantity = document.querySelector("#favoriteProduct-inc-quantity");
  increaseValue.onclick = function () {
    let newValue = Number(favoriteProductQuantity.value);
    if (newValue < 1000000) {
      favoriteProductQuantity.value = (newValue + 1);
    }
  };
}
increaseValue();
// end 

// reduce value
function reduceValue() {
  let reduceValue = document.querySelector("#favoriteProduct-inc-minus");
  let favoriteProductQuantity = document.querySelector("#favoriteProduct-inc-quantity");
  reduceValue.onclick = function () {
    let newValue = Number(favoriteProductQuantity.value);
    if (newValue > 0) {
      favoriteProductQuantity.value = (newValue - 1);
    }
  };
}
reduceValue();
// end

// open user favorite product 
let openFavorite = document.querySelector('#header-content-heart');
let openFavoriteModal = document.querySelector('#favoriteProduct-modal');
let openFavoriteInfo = document.querySelector('#favoriteProduct');
let closeFavoriteInfo = document.querySelector('#favoriteProduct-header-close');

openFavorite.onclick = function(){
  openFavoriteModal.classList.add('Fopen');
  openFavoriteInfo.classList.add('Fopen');
}

function hiddenFavoriteModal(){
  openFavoriteModal.classList.remove('Fopen');
  openFavoriteInfo.classList.remove('Fopen');
}
// event wheb click hidden favorite modal
openFavoriteModal.addEventListener('click',hiddenFavoriteModal);
closeFavoriteInfo.addEventListener('click',hiddenFavoriteModal);

// prevent bubble event
openFavoriteInfo.onclick = function(e){
  e.stopPropagation();
}

