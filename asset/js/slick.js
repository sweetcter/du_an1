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

