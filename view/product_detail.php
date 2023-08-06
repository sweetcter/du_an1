<?php require "./includes/header.php" ?>
<?php require "./includes/header_nav.php" ?>


<?php require "./includes/register_modal.php" ?>

<?php require "./includes/favorite_product.php" ?>

<?php require "./includes/cart_modal.php" ?>

<?php require "./includes/login_modal.php" ?>
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
                  <img src="../../du_an1/asset/images/banner_dm.png" alt="" width="100%">
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
<?php require "./includes/footer.php" ?>