<?php require "./includes/header.php" ?>

<div id="quen-modal" class="modal">
  <div class="modal-content">
    <span class="close-quen">&times;</span>
    <h2>Quên mật khẩu</h2>
    <form id="forgotPasswordForm">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <button type="submit">Gửi</button>
    </form>
  </div>
</div>
<?php require "./includes/register_modal.php" ?>

<?php require "./includes/favorite_product.php" ?>

<?php require "./includes/cart_modal.php" ?>

<?php require "./includes/login_modal.php" ?>

<?php require "./includes/header_nav.php" ?>

<!-- End nav -->
<div class="wrapper">
  <ul class="breadcrumbs">
    <li>Trang chủ /</li>
    <li>Thời trang nam</li>
  </ul>

  <main id="main-content">
    <div class="main-banner">
      <img src="../../du_an1/asset/images/quan-ao-thoi-trang-nam.jpg" alt="" class="main-banner-img" />
    </div>

    <h3 class="category-title">Thời Trang Nam</h3>

    <div class="functions">
      <div class="filter-function">
        Bộ lọc
        <i class="fa-solid fa-filter"></i>
      </div>
      <div class="view-function">
        <?php $count_product = count_home_product(); ?>
        <strong><?= $count_product ?></strong>
        Sản phẩm
      </div>
      <div class="sort-function">
        Sắp xếp
        <form action="">
          <select name="" id="" class="sort-function-select">
            <option value="">Mặc định</option>
          </select>
        </form>
      </div>
    </div>

    <div class="main-colums">
      <!-- block filter -->

      <?php require "./includes/filter_product.php" ?>

      <div class="product-colum">
        <div class="product-row row-col-4">
          <?php $product_result = select_home_product(true); ?>
          <?php foreach ($product_result as $key => $value) : ?>
            <!-- start item -->
            <div class="product-item">
              <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-image-item">
                <img src="../<?= $ROOT_URL ?><?= $value['main_image_url'] ?>" alt="" class="product-image" />
                <img src="../<?= $ROOT_URL ?><?= $value['hover_main_image_url'] ?>" alt="" class="product-image-second" />
              </a>
              <div class="product-title">
                <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-name">
                  <?= $value['product_name'] ?>
                </a>
                <i class="fa-regular fa-heart product-icon"></i>
              </div>
              <div class="product-price">
                <!-- format tiền tệ việt nam -->
                <?php
                $locale = 'vi_VN';
                $currency = $value['product_price'];
                $discount = $currency - ($currency * $value['discount'] / 100);
                $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
                $product_vn_price = $formatter->format($currency);
                $discount_price = $formatter->format($discount);
                ?>
                <span class="product-newPrice"><?= $discount_price ?></span>
                <span class="product-oldPrice"><?= $product_vn_price ?></span>
              </div>
              <span class="product-newProduct">
                <img src="../<?= $ROOT_URL ?>/asset/images/Label_New_Arrivals_14T7.png" alt="" />
              </span>
              <span class="product-discount"> -<?= $value['discount']; ?>% </span>
              <!-- Select color by product -->
              <?php $product_color_result = select_product_color($value['product_code']); ?>
              <div class="product-color-list">
                <?php foreach ($product_color_result as $value) : ?>
                  <div class="product-color">
                    <div class="product-color-child">
                      <img src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>" alt="" class="product-color-img" />
                    </div>
                    <div class="product-color-hover">
                      <img src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>" alt="" class="product-color-img-hover" />
                      <span class="product-color-name"> <?= $value['color_name'] ?> </span>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
            <!-- end item -->
          <?php endforeach ?>
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
  </main>

  <div class="product-suggest">
    <h3 class="product-suggest-title">
      GỢI Ý CHO BẠN: CÁC SẢN PHẨM ĐƯỢC QUAN TÂM NHẤT
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
      <!-- end item -->
    </div>
  </div>
</div>
<?php require "./includes/footer.php" ?>