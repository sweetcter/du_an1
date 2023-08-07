<?php require "./includes/header.php" ?>
<div id="register-modal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span id="close-button" class="close">&times;</span>
      <h2>Đăng ký</h2>
      <?php 
          if(isset($_GET['error'])){
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
            <h1 class="product_detail_name"><?= $product_result['product_name'] . "-" . $product_result['product_code'] ?></h1>
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
              <button type="button" class="product-detail-toCart" name="mua"  >Mua Ngay</button>
              <i class="fa-regular fa-heart product-detail-favorite"></i>
            </div>
          </div>
        </div>
        <h2>Bình Luận</h2>
        <div class="product-content col-2" style="width: 100%; height: 320px; overflow-y: auto;">
          <div class="box-content2  binhluan" style="width: 50%; font-size: 16px;">
            <?php
            $product_id = $_REQUEST['product_id'];
            $dsbl = loadall_comment($product_id);
            foreach ($dsbl as $bl) {
              extract($bl);
              $username_comment_result = getUserName($id);
              extract($username_comment_result);
            ?>
              <div class="main_noidung_binhluan">
                <div class="anh_user" style="width: 120px; height: 200px;">
                  <img src="../../du_an1/asset/images/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg" alt="" width="100%">
                </div>
                <div class="noidung">
                  <div class="noidung_name">
                    <h4><?php echo $username; ?></h4>
                    <h4 style="padding: 0px 50px;"><?php echo $content; ?></h4>
                    <h4><?php echo $comment_time; ?></h4>
                  </div>
                  <?php if (isset($_SESSION['username'])) {?>
                  <a href="">Update</a>
                  <a href="../../du_an1/view/binhluan/delete_bl.php">Delete</a>
                  <?php } ?>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="btn_comment" style="width: 50%; margin-left: 20px;">
            <?php if (isset($_SESSION['username'])) {
            ?>
              <div class="wrapper">
                <h2>ĐÁNH GIÁ SẢN PHẨM</h2>
                <form action="../../du_an1/view/binhluan/add_bl.php" method="post">
                  <input type="hidden" name="product_id" value="<?= $product_id ?>">
                  <textarea name="content" cols="30" rows="5" placeholder="Viết đánh giá..."></textarea>
                  <div class="btn-group">
                    <button type="submit" class="btn submit" name="guibinhluan">Submit</button>
                    <button class="btn cancel">Cancel</button>
                  </div>
                </form>
              </div>
            <?php
            } else { ?>
              <strong>
                <p class="thongbao" style="display: flex; justify-content: center; font-size: 16px; background-color: #e3b386; padding: 10px; color: white; width: 300px;">
                  Vui lòng đăng nhập để bình luận</p>
              </strong>
            <?php }
            ?>
          </div>
        </div>

        <div class="product-suggest">
          <h3 class="product-suggest-title" style="color: red;">
            SẢN PHẨM ROUTINE GỢI Ý RIÊNG CHO BẠN
          </h3>
          <div class="my-slickSilder">
          <?php $product_result = select_home_product(true,1); ?>
          <?php foreach ($product_result as $key => $value) : ?>
            <!-- start item -->
            <div class="product-item">
              <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-image-item">
                <img src="../<?= $ROOT_URL ?><?= $value['main_image_url'] ?>" alt="" class="product-image" />
              </a>
              <div class="product-title">
                <a href="./index.php?action=product_detail&product_id=<?= $value['product_id'] ?>" class="product-name">
                <?= $value['product_name'] ?>
                </a>
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
              <?php $product_color_result = select_product_color($value['product_code']); ?>
              <div class="product-color-list">
              <?php foreach ($product_color_result as $value) : ?>
                <a href="#" class="product-color">
                  <div class="product-color-child">
                    <img src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>" alt="" class="product-color-img" />
                  </div>
                </a>
                <?php endforeach ?>
              </div>
            </div>
            <!-- end item -->
            <?php endforeach ?>
          </div>
<?php require "./includes/footer.php" ?>