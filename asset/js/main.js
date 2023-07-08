let filterCategory = document.querySelectorAll(".filter-category");

for (let i = 0; i < filterCategory.length; i++) {
  filterCategory[i].onclick = function (e) {
    console.log("Button clicked");
    if (e.target.closest(".active")) {
      filterCategory[i].classList.remove("active");
    } else {
      filterCategory[i].classList.add("active");
    }
  };
}
// bắt sự kiện onscoll ở trình duyệt để hiển thị menu
function hiddenMenubar() {
  document.onscroll = function () {
    const scollTop = window.scrollY || document.documentElement.scrollTop;
    const header = document.querySelector(".header");
    if (scollTop >= 200) {
      header.classList.add("nav-active");
      header.style.justifyContent =`space-between`;
    } else {
      header.classList.remove("nav-active");
      header.style.justifyContent =``;
    }
  };
}
hiddenMenubar();
