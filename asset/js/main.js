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
        }else {
          filterList[i].style.height = filterListHeight + listPadding + 'px';
          filterList[i].style.maxHeight = filterListHeight + listPadding + 'px';
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
function closeMenuSidebar(className) {
  let menuClassName = `.${className}`;
  let menuSidebar = document.querySelector(menuClassName);
  let overlay = document.querySelector(".overlay");
  let hiddenBodyScollbar = document.querySelector("body");
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
function hiddenOverlay(){
  let overlay = document.querySelector(".overlay");
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
  let overlay = document.querySelector(".overlay");
  overlay.style.display = `none`;
});

let openRegister = document.getElementById("register-button");
let signUp = document.getElementById("register-modal");
console.log(openRegister);
openRegister.onclick = function () {
  let menuSidebar = document.querySelector(".header-menu-sidebar");
  signUp.style.top = "0";
  signUp.style.opacity = "1";
  menuSidebar.style.transform = `translateX(-100%)`;
  menuSidebar.style.opacity = `1`;
};



// click overlay 
let overlay = document.querySelector(".overlay");
overlay.onclick = function () {
  if(signUp.style.top === '0px'){
    signUp.style.top = '-150%';
    signUp.style.opacity = '0';
    hiddenOverlay();
  }
}
// close register 
let closeRegister = document.querySelector('#close-button');
console.log(closeRegister);

closeRegister.onclick = function(){
  hiddenOverlay();
  signUp.style.top = "-150%";
  signUp.style.opacity = "0";
}
// end close register

// Get the register form element
var registerForm = document.getElementById("register-form");

// When the user submits the register form
registerForm.onsubmit = function (event) {
  // Get form values
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm-password").value;

  // Check if password and confirm password match
  if (password !== confirmPassword) {
    event.preventDefault();
  } else {
    // Clear any previous error messages
    var errorElements = document.getElementsByClassName("error");
    for (var i = 0; i < errorElements.length; i++) {
      errorElements[i].innerHTML = "";
    }
    // Perform additional validation and submit form if everything is valid
    // ...
  }
};
