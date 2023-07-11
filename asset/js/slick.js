$(document).ready(function () {
  $(".my-slickSilder").slick({
    accessibility: true,
    slidesPerRow: 4,
    speed: 1000,
    slidesToScroll:1,
    nextArrow:'<i class="fa-solid fa-angle-right slick-next"></i>',
    prevArrow:'<i class="fa-solid fa-angle-left slick-prev"></i>',
  });
});