<?php require "./includes/header.php" ?>
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
      <div id="header-content-heart">
        <i class="fa-regular fa-heart header-content-heart"></i>
      </div>
      <div>
        <i class="fa-solid fa-heart header-content-heart" style="display: none"></i>
      </div>
      <div id="header-content-cart">
        <i class="fa-solid fa-cart-shopping header-content-cart"></i>
      </div>
    </div>
  </div>
</header>
<?php require "./includes/favorite_product.php" ?>
<?php require "./includes/cart_modal.php" ?>
<div class="wrapper">
  <main id="main-content">
    <div class="main-colums">

      <!-- block filter -->
      <div class="container">
        <!-- Chi tiết 1 sản phẩm -->
        <?php
        $product_id = $_GET['product_id'];
        $product_result = select_product_by_id($product_id);
        ?>
        <ul class="breadcrumbs">
          <li>Trang chủ /</li>
          <li><?= $product_result['product_name'] . "-" . $product_result['product_code'] ?></li>
        </ul>
        <div class="product-content col-2">
          <div class="product-content-left">
            <?php $image_result = select_all_image($product_id); ?>
            <div class="slider-for main-image-slider">
              <?php foreach ($image_result as $key => $value) : ?>
                <img src="../..<?= $ROOT_URL . $value['image_url'] ?>" alt="">
              <?php endforeach ?>

            </div>
            <div class="slider-nav second-image-slider">
              <?php foreach ($image_result as $key => $value) : ?>
                <img src="../..<?= $ROOT_URL .  $value['image_url'] ?>" alt="">
              <?php endforeach ?>
            </div>
          </div>

          <div class="product-content-right">
            <h2 class="product_detail_name"><?= $product_result['product_name'] . "-" . $product_result['product_code'] ?></h2>
            <?php
            $locale = 'vi_VN';
            $currency = $product_result['product_price'];
            $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
            $product_vn_price = $formatter->format($currency);
            ?>
            <h5 class="product_detail_price"><?= $product_vn_price ?></h5>
            <?php $product_color_result = select_product_color($product_result['product_code']); ?>
            <span class="product_detail_choose_color">Chọn màu sắc: <strong></strong></span>
            <?php foreach ($product_color_result as $key => $value) : ?>
              <span class="product_detail_image" style="background-image: url('..<?= $ROOT_URL ?><?= $value['color_image'] ?>');">
              </span>
            <?php endforeach ?>
            <span class="product_detail_choose_size">Chọn size: <strong></strong></span>
            <div class="product-detail-list-size">
              <span class="product-detail-size size-empty">m</span>
              <span class="product-detail-size">L</span>
              <span class="product-detail-size">XL</span>
            </div>
            <span class="product_detail_choose_quantity">Chọn số lượng: <strong></strong></span>
            <div class="product-detail-toCart-field">
              <div class="product-detail-inc">
                <i class="fa-solid fa-minus" id="product-detail-inc-minus"></i>
                <input type="number" value="1" id="product-detail-inc-quantity" class="product-detail-inc-quantity" />
                <i class="fa-solid fa-plus" id="product-detail-inc-plus"></i>
              </div>
              <button type="button" class="product-detail-toCart">Mua Ngay</button>
              <i class="fa-regular fa-heart product-detail-favorite"></i>
            </div>
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
          <?php require "./includes/footer.php"; ?>