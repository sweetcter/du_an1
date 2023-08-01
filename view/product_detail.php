<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700;800;900&family=Inter:wght@200;300;400;500;600&family=Montserrat:wght@300;400;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../../<?= $ROOT_URL ?>asset/slick-master/slick/slick.css" />
  <link rel="stylesheet" href="../../<?= $ROOT_URL ?>/asset/css/slick.css" />
  <link rel="stylesheet" href="../../<?= $ROOT_URL ?>/asset/css/index.css" />
  <link rel="stylesheet" href="../../<?= $ROOT_URL ?>/asset/css/base.css" />
  <link rel="stylesheet" href="../../<?= $ROOT_URL ?>/asset/css/grid.css" />
  <link rel="stylesheet" href="../../<?= $ROOT_URL ?>/asset/css/style.css" />
  <link rel="stylesheet" href="../../<?= $ROOT_URL ?>/asset/css/spct.css" />
  <?php require "./includes/header.php" ?>


</head>

<body>
  <header class="header">
    <div class="header-menu-sidebar">
      <ul class="header-menu-top-title">
        <li><a href="#" class="menu-sidebar-active">NAM</a></li>
        <li><a href="#">NỮ</a></li>
        <li><a href="#">BỘ SƯU TẬP</a></li>
      </ul>

      <ul class="header-menu-middle">
        <li><a href="#">XEM TẤT CẢ</a></li>
        <li><a href="#">NEW ARRIVALS</a></li>
        <li><a href="#">BEST SELLERS</a></li>
        <li>
          <a href="#">ÁO NAM </a>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li>
          <a href="#">QUẦN NAM</a>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li><a href="#">ĐỒ BƠI - ĐỒ ĐI BIỂN</a></li>
        <li>
          <a href="#">PHỤ KIỆN </a>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li>
          <a href="#">ƯU ĐÃI </a>
          <span class="sale">Sale</span>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li><a href="#">TIN THỜI TRANG</a></li>
      </ul>
      <ul class="header-menu-bottom">
        <i class="fa-regular fa-user header-menu-icon-user"></i>
        <li>ĐĂNG NHẬP</li>
        <li>ĐĂNG KÝ</li>
      </ul>
    </div>
    <!-- Hidden when scoll -->
    <div class="header-bar">
      <img src="../<?= $ROOT_URL ?>/asset/images/menu.png" alt="" class="header-menu-bar" />
    </div>
    <div class="overlay"></div>
    <div class="header-logo">
      <a href="#">
        <img src="../<?= $ROOT_URL ?>/asset/images/routine_log.png" alt="" class="header-logo-img" />
      </a>
    </div>
    <!-- end -->
    <!-- second header -->
    <ul class="header-nav">
      <div class="header-second-logo">
        <a href="#">
          <img src="../<?= $ROOT_URL ?>/asset/images/routine_log.png" alt="" class="header-logo-img" />
        </a>
      </div>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">NAM</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">NỮ</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">NEW</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">BEST</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">SALE</a>
      </li>
    </ul>

    <div class="header-content-right">
      <div class="header-search-bar">
        <div>
          <i class="fa-solid fa-magnifying-glass header-search-icon"></i>
        </div>
        <form action="">
          <input type="text" name="" id="" placeholder="Tìm kiếm" class="header-search-content" />
        </form>
      </div>
      <div class="header-content-tool">
        <div>
          <i class="fa-regular fa-user header-content-user"></i>
        </div>
        <div>
          <i class="fa-regular fa-heart header-content-heart"></i>
        </div>
        <div>
          <i class="fa-solid fa-heart header-content-heart" style="display: none"></i>
        </div>
        <div>
          <i class="fa-solid fa-cart-shopping header-content-cart"></i>
        </div>
      </div>
    </div>
  </header>
  <div class="wrapper">
    <main id="main-content">
      <div class="main-colums">
        <!-- block filter -->

        <div class="filter-sidebar">
          <div class="filter-block">
            <div class="filter-category active">
              <ul>
                DANH MỤC
              </ul>
              <i class="fa-solid fa-chevron-down filter-dropdown"></i>
            </div>
            <div class="filter-list">
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
            </div>
          </div>

          <div class="filter-block">
            <div class="filter-category ">
              <ul>
                NHÓM SẢN PHẨM
              </ul>
              <i class="fa-solid fa-chevron-down filter-dropdown"></i>
            </div>
            <div class="filter-list">
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
            </div>
          </div>
          <div class="filter-block">
            <div class="filter-category">
              <ul>
                GIỚI TÍNH
              </ul>
              <i class="fa-solid fa-chevron-down filter-dropdown"></i>
            </div>
            <div class="filter-list">
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Unisex</a>
              </li>
            </div>
          </div>
          <div class="filter-block">
            <div class="filter-category">
              <ul>
                SIZE
              </ul>
              <i class="fa-solid fa-chevron-down filter-dropdown"></i>
            </div>
            <div class="filter-list">
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Áo Nam</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Quần Nam</a>
              </li>
            </div>
          </div>

          <div class="filter-block">
            <div class="filter-category fast-active fast-close">
              <ul>
                MÀU SẮC
              </ul>
              <i class="fa-solid fa-chevron-down filter-dropdown"></i>
            </div>
            <div class="filter-list row-col-2">
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
                </label>
                <a href="#">Đen</a>
              </li>
              <li class="filter-category-name">
                <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
                <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
                <a href="#">Trắng</a>
              </li>
            </div>
          </div>
          <div class="filter-block">
            <div class="filter-category">
              <ul>
                GIÁ TIỀN
              </ul>
              <i class="fa-solid fa-chevron-down filter-dropdown"></i>
            </div>
            <div class="filter-list">
              <input type="range" name="" id="" value="79000" min="79000" max="1375000" class="filter-list-priceRange" />
              <input type="range" name="" id="" value="1375000" min="79000" max="1375000" class="filter-list-priceRange" />
              <div class="filter-price">
                <span class="filter-price-min">79 000đ</span>
                <span class="filter-price-max">1 375 000đ</span>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Chi tiết 1 sản phẩm -->

          <div class="product-content row">
            <div class="product-content-left row row-2">
              <?php
              $product_img =  select_all_image($_GET['product_id']);
              foreach ($product_img as $value) : ?>
                <div class="product-content-left-small-img">
                  <img src="../<?= $ROOT_URL ?><?= $value['image_url']?>" alt="" style="width: 100%">
                </div>
              <?php endforeach ?>
            </div>
            <div class="product-content-right" style="padding-top: 150px;">
              <?php
                $product_result = select_product_by_id($_GET['product_id']);
                ?>
                <h2><?= $product_result['product_name']?></h2>  
                <?php 
                $locale = 'vi_VN';
                $currency = $product_result['product_price'];
                $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY); 
                $product_vn_price = $formatter->format($currency);
                ?>
                <h5><?= $product_vn_price?></h5>
               
                <select>
                <?php
                  $product_size = select_all_size($_GET['product_id']);
                  foreach ($product_size as $value) : ?>
                      <option><?= $value['size_name']?></option> 
                      <?php endforeach ?>
                      <option>XXL</option>
                      <option>XL</option>
                      <option>L</option>
                      <option>M</option>
                      <option>S</option>
                </select>

            <input type="number" value="<?= $product_result['quantity']?>">

            <a href="" class="btn">Thêm vào giỏ hàng</a>
            <h3>Thông tin sản phẩm</h3><br>
            <p><?= $product_result['quantity']?></p>
          </div>
        </div>
        <div class="product-suggest">
          <h3 class="product-suggest-title" style="color: red;">
            SẢN PHẨM ROUTINE GỢI Ý RIÊNG CHO BẠN
          </h3>
          <div class="my-slickSilder">
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>
            <!-- end item -->
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>
            <!-- end item -->
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>
            <!-- end item -->
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>
            <!-- end item -->
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>
            <!-- end item -->
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>
            <!-- end item -->
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>
            <!-- end item -->
            <!-- start item -->
            <div class="product-item">
              <a href="#" class="product-image-item">
                <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="#" class="product-name">
                  Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                </a>
              </div>
              <div class="product-price">
                <span class="product-newPrice">441.000₫</span>
                <span class="product-oldPrice">499.000₫</span>
                <span class="product-discount"> -2% </span>
              </div>
              <div class="product-color-list">
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
                  </div>
                </a>
              </div>
            </div>

          </div>
</body>

</html>
<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
  }
</script>

<!-- -----js img--------- -->

<script>
  var ProductImg = document.getElementById("ProductImg");
  var SmallImg = document.getElementsByClassName("small-img")

  SmallImg[0].onclick = function() {
    ProductImg.src = SmallImg[0].src;
  }

  SmallImg[1].onclick = function() {
    ProductImg.src = SmallImg[1].src;
  }

  SmallImg[2].onclick = function() {
    ProductImg.src = SmallImg[2].src;
  }

  SmallImg[3].onclick = function() {
    ProductImg.src = SmallImg[3].src;
  }
</script>
<?php require "./includes/footer.php"; ?>