<?php require "./includes/header.php" ?>
<!-- sign up -->
<div id="register-modal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="close-button" class="close">&times;</span>
    <h2>Đăng ký</h2>
    <form action="index.php?action=dangky" method="POST" id="register-form">
      <div class="form-group">
        <label for="full_name">Full Name*</label>
        <input type="text" name="full_name" id="full_name" placeholder="Full name" required>
      </div>
      <div class="form-group">
        <label for="username">UserName*</label>
        <input type="text" name="username" id="full_name" placeholder="Username" required>
      </div>
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" name="email" id="email" placeholder="Your email" required>
      </div>

      <div class="form-group">
        <label for="password">Password *</label>
        <input type="password" name="password" id="password" placeholder="Enter a password" required>
      </div>
      <div class="form-group">
        <label for="address">Address *</label>
        <input type="text" name="address" id="address" placeholder="Your address" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone *</label>
        <input type="text" name="phone" id="phone" placeholder="Your phone" required>
      </div>

      <button type="submit" class="buttonregister" name="dangky">Đăng ký</button>
      <?php
      if (isset($thongbao) && ($thongbao) != "") {
        echo $thongbao;
      } ?>
    </form>
  </div>
</div>
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
<!-- Nav -->
<!-- end sign-up -->
<!--  favoriteProduct-->
<?php require "./includes/favorite_product.php" ?>
<!-- end -->
<!-- Start Cart -->
<?php require "./includes/cart_modal.php" ?>
<!-- sign in -->
<?php require "./includes/login_modal.php" ?>
<!-- Nav -->
<!-- end sign in -->

<?php require "./includes/header_nav.php" ?>

<!-- End nav -->
<div class="wrapper">
  <ul class="breadcrumbs">
    <li>Trang chủ /</li>
    <li>Kết quả tìm kiếm</li>
  </ul>

  <main id="main-content">
    <!-- <div class="main-banner">
      <img src="../../du_an1/asset/images/quan-ao-thoi-trang-nam.jpg" alt="" class="main-banner-img" />
    </div> -->

    <h4 class="category-title_tim_kiem">Kết quả tìm kiếm cho từ khóa <span>"<?= $_GET['tukhoa']?>"</span></h4>

    <div class="functions">
      <div class="filter-function">
        Bộ lọc
        <i class="fa-solid fa-filter"></i>
      </div>
      <div class="view-function">
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

  <?php  require "./includes/filter_product.php"?>

      <div class="product-colum">
        <div class="product-row row-col-4">
            <?php 
           $keyword = $_GET['tukhoa'];
           $b = timkiem($keyword); 
           
           $currentpage = isset($_GET['page']) ? intval($_GET['page']) : 1;
   
           // $itemsPerPage là số sản phẩm hiển thị trên mỗi trang
           $itemsPerPage = 8;
           
           // Tính toán vị trí bắt đầu của sản phẩm trên trang hiện tại
           $start = ($currentpage - 1) * $itemsPerPage;
   
           // Lấy tổng số sản phẩm
           $totalProducts = count_all_products();
          
           // Tính tổng số trang dựa trên tổng số sản phẩm và số sản phẩm trên mỗi trang
           $totalPages = ceil($totalProducts / $itemsPerPage);
           foreach ($b as $key => $value) :
            ?>
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
                $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
                $product_vn_price = $formatter->format($currency);
                ?>
                <span class="product-newPrice"><?= $product_vn_price ?></span>
                <span class="product-oldPrice">499.000₫</span>
              </div>
              <span class="product-newProduct">
                <img src="../<?= $ROOT_URL ?>/asset/images/Label_New_Arrivals_14T7.png" alt="" />
              </span>
              <span class="product-discount"> -2% </span>
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
            <li class="home-pagination-item <?php echo ($currentpage == 1) ? 'home-pagination-disable' : ''; ?>">
                <a href="timkiem?tukhoa=<?= $keyword ?>&page=<?php echo $currentpage - 1; ?>" class="home-pagination-link">
                    <i class="fa-solid fa-angle-left home-pagination-icon"></i>
                </a>
            </li>
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li class="home-pagination-item <?php echo ($i == $currentpage) ? 'home-pagination-active' : ''; ?>">
                    <a href="timkiem?tukhoa=<?= $keyword ?>&page=<?php echo $i; ?>" class="home-pagination-link"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
            <li class="home-pagination-item <?php echo ($currentpage == $totalPages) ? 'home-pagination-disable' : ''; ?>">
                <a href="timkiem?tukhoa=<?= $keyword ?>&page=<?php echo $currentpage + 1; ?>" class="home-pagination-link">
                    <i class="fa-solid fa-angle-right home-pagination-icon"></i>
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
    <?php require "./includes/footer.php" ?>
  </div>
</div>






