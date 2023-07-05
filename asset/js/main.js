let filterCategory = document.querySelectorAll(".filter-category");

for (let i = 0; i < filterCategory.length; i++) {
  filterCategory[i].onclick = function (e) {
    console.log('Button clicked');
    if (e.target.closest(".active")) {
      filterCategory[i].classList.remove("active");
    } else {
      filterCategory[i].classList.add("active");
    }
  };
}
