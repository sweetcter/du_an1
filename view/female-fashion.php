<?php require "./includes/header.php" ?>
<div id="register-modal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="close-button" class="close">&times;</span>
    <h2>Đăng ký</h2>
    <?php
    if (isset($_GET['error'])) {
      echo $_GET['error'];
    }
    ?>
    <form action="../../du_an1/view/progess-signup.php" method="POST" id="register-form">
      <div class="form-group">
        <label for="full_name">Full Name*</label>
        <input type="text" name="full_name" id="full_name" plac eholder="Full name" required />
      </div>
      <div class="form-group">
        <label for="username">UserName*</label>
        <input type="text" name="username" id="full_name" placeholder="Username" required />
      </div>
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" name="email" id="email" placeholder="Your email" required />
      </div>

      <div class="form-group">
        <label for="password">Password *</label>
        <input type="password" name="password" id="password" placeholder="Enter a password" required />
      </div>
      <div class="form-group">
        <label for="address">Address *</label>
        <input type="text" name="address" id="address" placeholder="Your address" required />
      </div>
      <div class="form-group">
        <label for="phone">Phone *</label>
        <input type="text" name="phone" id="phone" placeholder="Your phone" required />
      </div>

      <button type="submit" class="buttonregister" name="dangky">Đăng ký</button>
    </form>
  </div>
</div>
<div id="quen-modal" class="modal">
  <div class="modal-content">
    <span class="close" id="close_quen">&times;</span>
    <h2>Quên mật khẩu</h2>
    <form id="forgotPasswordForm" method="post" action="index.php?action=quenmk">
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" name="email" id="email" placeholder="Your email" required />
      </div>
      <button type="submit" class="buttonregister" name="btnsubmit">Gửi</button>
    </form>
  </div>
</div>
<!-- ĐĂNG NHẬP -->

<div id="my-modal" class="modal1">
  <div class="modal-content">
    <span class="sign-in-close">&times;</span>
    <h2 style="text-align: center">Đăng nhập</h2>
    <form action="../../du_an1/view/progess-login.php" method="POST">
      <div class="form-group">
        <label for="username">Tài khoản:</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password3" name="password" required />
        <a href=""><span class="quenmk">Quên mật khẩu?</span></a>
      </div>
      <br />
      <button type="submit" class="buttonregister" name="login" id="submit-btn">
        Đăng nhập <style></style>
      </button>

      <br />

    </form>
    <p id="message"></p>
  </div>
</div>
<!-- Nav -->
<div></div>
<!-- Nav -->
<!-- end sign-up -->
<!--  favoriteProduct-->
<?php require "./includes/favorite_product.php" ?>
<!-- end -->
<!-- Start Cart -->
<?php require "./includes/cart_modal.php" ?>
<!-- sign in -->

<!-- Nav -->
<!-- end sign in -->

<?php require "./includes/header_nav.php" ?>

<!-- End nav -->
<div class="wrapper">
  <ul class="breadcrumbs">
    <li>Trang chủ /</li>
    <li>Thời trang nữ</li>
  </ul>

  <main id="main-content">
    <div class="main-banner">
      <img src="../<?= $ROOT_URL ?>/asset/images/rainFashion.jpg" alt="" class="main-banner-img" />
    </div>

    <h3 class="category-title">Thời Trang Nữ</h3>

    <div class="functions">
      <div class="filter-function">
        Bộ lọc
        <i class="fa-solid fa-filter"></i>
      </div>
      <div class="view-function">
        <strong>363</strong>
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
              <a href="#">Áo Nữ</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nữ</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Chân Váy - Đầm Nữ</a>
            </li>
          </div>
        </div>

        <div class="filter-block">
          <div class="filter-category">
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
              <a href="#">Áo Nữ</a>
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
              <a href="#">Nữ</a>
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
          <div class="filter-list flex-col-4">
            <span class="filter-list-size"> 28 </span>
            <span class="filter-list-size"> M </span>
            <span class="filter-list-size"> L </span>
            <span class="filter-list-size"> xl</span>
          </div>
        </div>

          <?php require "./includes/filter_product.php" ?>
          <div class="product-colum">
            <div class="product-row row-col-4">
              <!-- start item -->
          <?php $product_result = select_home_product(true,2); ?>
          <?php foreach ($product_result as $key => $value) : ?>
              <div class="product-item">
                <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-image-item">
                  <img
                    src="../<?= $ROOT_URL ?><?= $value['main_image_url'] ?>"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../<?= $ROOT_URL ?><?= $value['hover_main_image_url'] ?>"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-name">
                  <?= $value['product_name'] ?>
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
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
                <?php $product_color_result = select_product_color($value['product_code']); ?>
                <div class="product-color-list">
                <?php foreach ($product_color_result as $value) : ?>
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> <?= $value['color_name'] ?></span>
                    </div>
                  </div>

                  <?php endforeach ?>
                </div>
              </div>
              <!-- end item -->
              <?php endforeach ?>
            </div>  
          </div>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

<<<<<<< HEAD
        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
=======
      <div class="product-suggest">
        <h3 class="product-suggest-title">
          GỢI Ý CHO BẠN: CÁC SẢN PHẨM ĐƯỢC QUAN TÂM NHẤT
        </h3>
        <div class="my-slickSilder">
        <?php $product_result = select_home_product(true,2); ?>
    <?php foreach ($product_result as $key => $value) : ?>
          <!-- start item -->
          <div class="product-item">
            <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-image-item">
              <img
                src="../<?= $ROOT_URL ?><?= $value['main_image_url'] ?>"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-name">
              <?= $value['product_name'] ?>
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
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
                <span class="product-discount"> -<?= $value['discount']; ?>% </span>
            </div>
          
            <span class="product-newProduct">
              <img src="../<?= $ROOT_URL?>/asset/images/newProduct.png" alt="" />
            </span>
            <?php $product_color_result = select_product_color($value['product_code']); ?>
            <div class="product-color-list">
            <?php foreach ($product_color_result as $value) : ?>
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

      
              <?php endforeach ?>
            </div>
          </div>
          <?php endforeach ?>
>>>>>>> 69f6a8b2a787a53d9498970c3c7cf14326d549af
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
          </a>
          <i class="fa-regular fa-heart product-icon"></i>
        </div>
        <div class="product-price">
          <span class="product-newPrice">324.000₫</span>
          <span class="product-oldPrice">329.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <span class="product-newProduct">
          <img src="../<?= $ROOT_URL ?>/asset/images/newProduct.png" alt="" />
        </span>

        <div class="product-color-list">
          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" class="product-color-img" />
            </div>
          </div>

          <div class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" class="product-color-img" />
            </div>
          </div>
        </div>
      </div>
      <!-- end item -->
    </div>
  </div>
  <?php require "./includes/footer.php"; ?>