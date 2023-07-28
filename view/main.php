<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Routine</title>
    <link rel="stylesheet" href="../asset/css/index.css" />
    <script
      src="https://kit.fontawesome.com/5614ac6426.js"
      crossorigin="anonymous"
    ></script>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- thu -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700;800;900&family=Inter:wght@200;300;400;500;600&family=Montserrat:wght@300;400;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../<?= $ROOTt_URL?>/asset/slick-master/slick/slick.css"
    />
    <link rel="stylesheet" href="../../<?= $ROOTt_URL?>/asset/css/slick.css" />
    <link rel="stylesheet" href="../../<?= $ROOTt_URL?>/asset/css/index.css" />
    <link rel="stylesheet" href="../../<?= $ROOTt_URL?>/asset/css/base.css" />
    <link rel="stylesheet" href="../../<?= $ROOTt_URL?>/asset/css/grid.css" />
    <link rel="stylesheet" href="../../<?= $ROOTt_URL?>/asset/css/style.css" />
    <style>
      .mySlides {
        display: none;
      }
      img {
        vertical-align: middle;
      }

      /* Slideshow container */
      .slideshow-container {
        max-width: 100%;
        position: relative;
        margin: auto;
      }
      .to_dot {
        position: absolute;
        bottom: 5%;
        text-align: center;
        right: 48%;
      }
      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active {
        background-color: #717171;
      }

      /* Fading animation */
      .fade {
        animation-name: fade;
        animation-duration: 3s;
      }

      @keyframes fade {
        from {
          opacity: 0.8;
        }
        to {
          opacity: 1;
        }
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .text {
          font-size: 11px;
        }
      }
    </style>
  </head>
  <body>
    <div class="x font">
      <div class="showimg">
        <div class="slideshow-container">
          <div class="mySlides fade">
            <img src="../du_an1/asset/images/bannertop.jpg" style="width: 100%" />
          </div>

          <div class="mySlides fade">
            <img src="../du_an1/asset/images/bannertop2.jpg" style="width: 100%" />
          </div>

          <div class="mySlides fade">
            <img src="../du_an1/asset/images/bannertop3.jpg" style="width: 100%" />
          </div>


          <div style="text-align: center" class="to_dot">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
        <br />
      </div>

      <header class="header1">
        <div class="header_row1 flexx" style="display: none">
          <div class="row1 flexx">
            <div class="row1_left flexx">
              <div class="logo">
                <img
                  src="../<?= $ROOTt_URL?>/asset/images/logo.png"
                  style="width: 118px; height: 33px"
                  alt="logo tiki"
                />
              </div>
            </div>
          </div>

          <div class="header_row2">
            <div class="danhmuc">
              <ul class="flexx">
                <li><a href="<?= $ROOTt_URL?>/male-fashion">NAM</a></li>
                <li><a href="<?= $ROOTt_URL?>/female-fashion">NỮ</a></li>
                <li><a href="#">NEW</a></li>
                <li><a href="#">BEST</a></li>
                <li><a href="#">SALE</a></li>
              </ul>
            </div>
          </div>

          <div class="nav">
            <div class="search flexx">
              <div class="search_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <div class="search_input">
                <input
                  class="search_input_nav"
                  type="text"
                  placeholder="Bạn tìm gì hôm nay"
                />
              </div>
            </div>
            <div class="button1 button_home">
              <a href="../view/index.html"
                ><i class="fa-solid fa-house"></i>
              </a>
              <!-- trang chủ -->
            </div>
            <div class="button1">
              <a href="../view/dangnhap.html"
                ><i class="fa-solid fa-face-smile"></i
              ></a>
              <!-- tài khoản -->
            </div>
            <div class="button1 button1__cart">
              <!-- trái tim -->
              <i class="fa-regular fa-heart right"></i>
              <div class="so">
                <span>0</span>
              </div>
            </div>
            <div class="button1 button1__cart">
              <!-- giỏ hàng -->
              <a href="../view/shoping-cart.html"
                ><i class="fa-solid fa-cart-shopping"></i
              ></a>
              <!-- <span>Tài khoản</span> -->
              <div class="so">
                <span>0</span>
              </div>
            </div>
          </div>
        </div>

        <div class="header_row1 flexx">
          <div class="header_row2">
            <div class="danhmuc">
              <ul class="flexx">
                <li><a href="<?= $ROOTt_URL?>/male-fashion">NAM</a></li>
                <li><a href="<?= $ROOTt_URL?>/female-fashion">NỮ</a></li>
                <li><a href="#">NEW</a></li>
                <li><a href="#">BEST</a></li>
                <li><a href="#">SALE</a></li>
              </ul>
            </div>
          </div>

          <div class="row1 flexx">
            <div class="row1_left flexx">
              <div
                class="logo"
                style="transform: translate(-50%, 0); left: 50%"
              >
                <img
                  src="../<?= $ROOTt_URL?>/asset/images/logo.png"
                  style="width: 118px; height: 33px"
                  alt="logo tiki"
                />
              </div>
            </div>
          </div>
          <div class="nav">
            <div class="search flexx">
              <div class="search_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <div class="search_input">
                <input
                  class="search_input_nav"
                  type="text"
                  placeholder="Bạn tìm gì hôm nay"
                />
              </div>
            </div>
            <div class="button1 button_home">
              <a href="../view/index.html"
                ><i class="fa-solid fa-house"></i>
              </a>
              <!-- trang chủ -->
            </div>
            <div class="button1">
              <a href="../view/dangnhap.html"
                ><i class="fa-solid fa-face-smile"></i
              ></a>
              <!-- tài khoản -->
            </div>
            <div class="button1 button1__cart">
              <!-- trái tim -->
              <i class="fa-regular fa-heart"></i>
              <div class="so">
                <span>0</span>
              </div>
            </div>
            <div class="button1 button1__cart">
              <!-- giỏ hàng -->
              <a href="../view/shoping-cart.html"
                ><i class="fa-solid fa-cart-shopping"></i
              ></a>
              <!-- <span>Tài khoản</span> -->
              <div class="so">
                <span>0</span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <nav>
        <div class="div1">
          <div class="div1_1 div1_1_cart">
            <img src="../<?= $ROOTt_URL?>/asset/images/bannerroww1.png" alt="" />
            <div class="xemngay">
              <button><a href="#">xem ngay</a></button>
            </div>
          </div>

          <div class="div1_1 div1_1_cart">
            <img src="../<?= $ROOTt_URL?>/asset/images/bannerrow2.jpg" alt="" />
            <div class="xemngay">
              <button><a href="#">xem ngay</a></button>
            </div>
          </div>

          <div class="div1_1 div1_1_cart">
            <img src="../<?= $ROOTt_URL?>/asset/images/bannerroww2.webp" alt="" />
            <div class="xemngay">
              <button><a href="#">xem ngay</a></button>
            </div>
          </div>
        </div>

        <div class="div1_2 div1_2_cart">
          <img src="../<?= $ROOTt_URL?>/asset/images/banneryoutube.jpg" alt="" />
          <div class="div_youtube">
            <!-- <video controls autoplay src="https://youtu.be/L7qbjrmQ728" width="520px" height="293px"></video> -->
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/L7qbjrmQ728"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
        </div>

        <!-- chạy thử -->

        <div
          class="main-colums font_roboto_base"
          style="display: block !important; padding: 0 5%"
        >
          <!-- block filter -->

          <div class="product-colum">
            <div class="product-row row-col-4">
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>

                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->

              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
            </div>

            <ul class="home-pagination">
              <li class="home-pagination-item home-pagination-disable">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angle-left home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item home-pagination-disable">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angles-left home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item home-pagination-active">
                <a class="home-pagination-link" href="#">1</a>
              </li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">2</a>
              </li>
              <li class="home-pagination-item">...</li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">15</a>
              </li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">16</a>
              </li>
              <li class="home-pagination-item">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angle-right home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angles-right home-pagination-icon"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- end -->

        <!-- </div> -->

        <div class="title_rowgird font_roboto">
          <h1>sản phẩm đồng giá</h1>
        </div>

        <!-- chạy thử -->

        <div
          class="main-colums font_roboto_base"
          style="display: block !important; padding: 0 5%"
        >
          <div class="product-colum">
            <div class="product-row row-col-4">
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>

                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/product1_con.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product_discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOTt_URL?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
            </div>

            <ul class="home-pagination">
              <li class="home-pagination-item home-pagination-disable">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angle-left home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item home-pagination-disable">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angles-left home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item home-pagination-active">
                <a class="home-pagination-link" href="#">1</a>
              </li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">2</a>
              </li>
              <li class="home-pagination-item">...</li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">15</a>
              </li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">16</a>
              </li>
              <li class="home-pagination-item">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angle-right home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angles-right home-pagination-icon"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- end -->

        <div class="div_bottomrowgird">
          <div class="div1_1 div1_1_cart">
            <img src="../<?= $ROOTt_URL?>/asset/images/banner_dm.png" alt="" />
            <div class="xemngay">
              <button><a href="#">xem ngay</a></button>
            </div>
          </div>

          <div class="div1_1 div1_1_cart">
            <img src="../<?= $ROOTt_URL?>/asset/images/banner_dm2.png" alt="" />
            <div class="xemngay">
              <button><a href="#">xem ngay</a></button>
            </div>
          </div>
        </div>

        <div class="title_rowgird font_roboto">
          <h1>thời trang</h1>
        </div>

        <div class="row_girdx">
          <div class="col column font_roboto">
            <div class="column_img">
              <img
                src="../<?= $ROOTt_URL?>/asset/images/tintuc1.jpg"
                style="width: 100%; height: 100%"
                alt=""
              />
            </div>
            <div class="column_info">
              <div class="column_button flexx font_roboto">
                <div class="button__1">
                  <button>thành tựu</button>
                </div>
                <div class="button__1">
                  <button>sự nghiệp</button>
                </div>
              </div>

              <div class="title_name">
                <span
                  >Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                  miếng</span
                >
              </div>

              <div class="column_time">
                <span>May 4,2028</span>
              </div>

              <div class="name font">
                <span
                  >Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                  miếng</span
                >
              </div>
            </div>
          </div>

          <div class="col column font_roboto">
            <div class="column_img">
              <img
                src="../<?= $ROOTt_URL?>/asset/images/tintuc2.jpg"
                style="width: 100%; height: 100%"
                alt=""
              />
            </div>
            <div class="column_info">
              <div class="column_button flexx font_roboto">
                <div class="button__1">
                  <button>thành tựu</button>
                </div>
                <div class="button__1">
                  <button>sự nghiệp</button>
                </div>
              </div>

              <div class="title_name">
                <span
                  >Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                  miếng</span
                >
              </div>

              <div class="column_time">
                <span>May 4,2028</span>
              </div>

              <div class="name font">
                <span
                  >Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                  miếng</span
                >
              </div>
            </div>
          </div>

          <div class="col column font_roboto">
            <div class="column_img">
              <img
                src="../<?= $ROOTt_URL?>/asset/images/tintuc3.jpg"
                style="width: 100%; height: 100%"
                alt=""
              />
            </div>
            <div class="column_info">
              <div class="column_button flexx font_roboto">
                <div class="button__1">
                  <button>thành tựu</button>
                </div>
                <div class="button__1">
                  <button>sự nghiệp</button>
                </div>
              </div>

              <div class="title_name">
                <span
                  >Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                  miếng</span
                >
              </div>

              <div class="column_time">
                <span>May 4,2028</span>
              </div>

              <div class="name font">
                <span
                  >Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                  miếng</span
                >
              </div>
            </div>
          </div>
        </div>
      </nav>

      <footer></footer>
    </div>

    <script>
      // phần showw ảnh phẩn sản phẩm
      // var dip= document.getElementsByClassName('dip');
      // console.log(dip);

      // const x=document.getElementsByClassName('dip');
      // const y=document.getElementById('dip_show');
      // console.log(x[0].src);
      // const z =y.src;

      //     x[0].onmouseover=function () {
      //         y.src=this.src;
      // }
      // x[0].onmouseout=function () {
      //     y.src=z;
      // }
      // function myd(e) {
      //     let v = e.getElementsByClassName('dip')[0];
      //     y.src=v.src;
      // }
      // let imgsrc ='';

      // function get(e){
      //     let img = e.querySelector('img');
      //     imgsrc = img.getAttribute('src');
      // console.log(imgsrc);
      // return imgsrc;
      // y.src = imgsrc;
      // }
      // var x = get(e);
      // console.log(imgsrc);

      // let defaultImageSrc = z;

      // function updateImageSrc(element) {
      //   let imgElement = element.querySelector('img');
      //   let imgSrc = imgElement.getAttribute('src');
      //   let dipShowImg = document.getElementById('dip_show');
      //   dipShowImg.src = imgSrc;
      // }

      // function resetImageSrc() {
      //   let dipShowImg = document.getElementById('dip_show');
      //   dipShowImg.src = defaultImageSrc;
      // }

      // phần slide show
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }

      function showMenubar() {
        document.onscroll = function () {
          const scollTop = window.scrollY || document.documentElement.scrollTop;
          const header = document.getElementsByClassName("header_row1");
          const header1 = document.getElementsByClassName("header1");
          // console.log(header);
          header[0].style.display = "";
          if (scollTop >= 300) {
            header[1].style.display = "none";
            header1[0].style.background = "#fff";
          } else {
            header[0].style.display = "none";
            header[1].style.display = "";
            header1[0].style.background = "";
          }
        };
      }
      showMenubar();
    </script>
  </body>
</html>