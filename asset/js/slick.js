$(document).ready(function () {
  $(".my-slickSilder").slick({
    accessibility: true,
    speed: 500,
    slidesToShow: 4,
    infinite: false,
    slidesToScroll: 1,
    nextArrow: '<i class="fa-solid fa-angle-right slick-next"></i>',
    prevArrow: '<i class="fa-solid fa-angle-left slick-prev"></i>',
  });
});


// // set the time the event is triggered
// let washidden = false;
// function hiddenArrow() {
//   // hidden arrow when empty item
//   let slideNextArrow = document.querySelector(".slick-next");
//   let slidePrevArrow = document.querySelector(".slick-prev");
//   // next arrow
//   if (slideNextArrow.getAttribute("aria-disabled") === "true") {
//     slideNextArrow.classList.add("empty");
//   } else {
//     slideNextArrow.classList.remove("empty");
//   }
//   //prev arrow
//   if (slidePrevArrow.getAttribute("aria-disabled") === "true") {
//     slidePrevArrow.classList.add("empty");
//   } else {
//     slidePrevArrow.classList.remove("empty");
//   }
// }
// let ccoll = document.querySelector("my-slickSlider");
// console.log(ccoll);
// setTimeout(function () {
//   hiddenArrow();
//   washidden = true;
// }, 100);
// if (washidden) {
//   hiddenArrow();
// }
