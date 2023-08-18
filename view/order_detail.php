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
<!--  favoriteProduct-->
<?php require "./includes/favorite_product.php" ?>
<!-- end -->
<?php require "./includes/cart_modal.php" ?>
<?php require ".$INCLUDES_URL/delete_cart_confirm.php" ?>

<?php require "./includes/header_nav.php" ?>
<?php if (!empty($_SESSION['cart'])) : ?>
  <ul class="breadcrumbs">
    <li>Trang chủ /</li>
    <li>Giỏ hàng</li>
  </ul>
  <section class="checkout spad">
    <div class="container">
      <h4 class="oder-detail-title">
        <i class="fa-solid fa-cart-shopping" style="margin-right:16px"></i>
        GIỎ HÀNG
      </h4>
      <div class="checkout__form">
        <form action="" method="post">
          <div class="row-col-2 order">
            <div class="order-info-left">
              <div class="show-cart-products">
                <?php //unset($_SESSION['cart']);
                $count_cart = 0;
                $total_price = 0;
                $total_new_price = 0;
                $cart_quantity = 0;
                $locale = 'vi_VN';
                $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
                //unset($_SESSION['count_cart']);
                ?>
                <?php if (isset($_SESSION['cart'])) :  //var_dump($_SESSION['cart']);
                ?>
                  <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                    <?php $product_result = select_product_by_id($key);
                    $cart_quantity += $value['quantity'] ?>
                    <div class="favoriteProduct-info order">
                      <a href="" class="favoriteProduct-img">
                        <div class="favoriteProduct-img-first">
                          <img src="..<?= $ROOT_URL . $value['main_image_url'] ?>" alt="" />
                        </div>
                        <div class="favoriteProduct-second-img">
                          <img src="..<?= $ROOT_URL . $value['second_image_url'] ?>" alt="" />
                        </div>
                      </a>
                      <div class="favoriteProduct-details">
                        <a href="#" class="favoriteProduct-link"><?= $value['product_name'] ?></a>
                        <div class="favoriteProduct-option">
                          <div class="favoriteProduct-choose">
                            <div class="favoriteProduct-choose-color cart">
                              MÀU:
                              <span>
                                <?= $value['color_name'] ?>
                              </span>
                            </div>
                            <div class="favoriteProduct-choose-size">
                              SIZE:
                              <?php $get_size = select_size_by_id($key); ?>
                              <span><?= $get_size['size_name'] ?></span>
                            </div>
                          </div>
                          <div class="favoriteProduct-inc">
                            <span id="cart_product_id" product_id="<?= $key ?>"></span>
                            <i class="fa-solid fa-minus cartModal-inc-minus" id="cartModal-inc-minus"></i>
                            <input type="number" disabled value="<?= $value['quantity'] ?>" class="favoriteProduct-inc-quantity" product-cart="<?= $value['product_id'] ?>" />
                            <i class="fa-solid fa-plus cartModal-inc-plus" id="cartModal-inc-plus"></i>
                            <input type="hidden" value="<?= $product_result['quantity'] ?>" class="cart_product_quantity">
                          </div>
                          <?php
                          $currency = $value['product_price'];
                          $total_currency = $value['product_price'] * $value['quantity'];
                          $discount = $currency - ($currency * $value['discount'] / 100);
                          $total_discount = $total_currency - ($total_currency * $value['discount'] / 100);
                          $product_vn_price = $formatter->format($currency);
                          $discount_price = $formatter->format($discount);
                          $total_price += $total_currency;
                          $total_new_price += $total_discount;
                          ?>
                          <span class="favoriteProduct-price"><?= $discount_price ?></span>
                          <del class="favoriteProduct-price-old"><?= $product_vn_price ?></del>
                        </div>
                      </div>
                      <div class="delete-from-cart favoriteProduct-close" product_id="<?= $key ?>">
                        <i class="fa-solid fa-xmark"></i>
                      </div>
                    </div>
                  <?php endforeach ?>
                <?php endif ?>
              </div>
              <button type="button" id="auto__fill__btn" <?= !isset($_SESSION['username']) ? 'hidden' : ''; ?>>Tự động điền</button>
              <input type="hidden" id="customer_id" value="<?= isset($_SESSION['username']) ? $_SESSION['username']['id'] : '' ?>">
              <div class="row-col-2 order-info">
                <div class="checkout__input">
                  <div class="checkout__tittle">
                    <span>Họ Tên</span> <span>*</span>
                  </div>
                  <input type="text" required id="customerFirstAndLastName">
                </div>
                <div class="checkout__input">
                  <div class="checkout__tittle">
                    <span>Địa chỉ</span> <span>*</span>
                  </div>
                  <input type="text" required class="checkout__input__add" id="customerAddress">
                </div>
                <div class="checkout__input">
                  <div class="checkout__tittle">
                    <span>Số điện thoại</span> <span>*</span>
                  </div>
                  <input type="number" required id="customerNumberPhone">
                </div>
                <div class="checkout__input">
                  <div class="checkout__tittle">
                    <span>Email</span><span>*</span>
                  </div>
                  <input type="email" required id="customerEmail">
                </div>
              </div>
              <div class="checkout__input">
                <div class="checkout__tittle">
                  <span>Ghi chú</span><span>*</span>
                </div>
                <textarea name="" id="customerNote" cols="30" rows="8" placeholder="Ghi chú về đơn đặt hàng của bạn" style="width:100%;resize: none;border:1px solid  #ebebeb"></textarea>
              </div>
            </div>
            <div class="order-bill">
              <div class="checkout__order">
                <div class="checkout__order__products">
                  <h4 class="checkout__oder__title">TẠM TÍNH</h4>
                  <div class="checkout__oder__quantity">
                    <span>Số lượng</span>
                    <span class="checkout__oder__quantity_value"><?= $cart_quantity ?></span>
                  </div>
                  <div class="checkout__order__price">
                    <?php $total_new_price = $formatter->format($total_new_price); ?>
                    <span>Tạm tính</span>
                    <span class="checkout__order__provisional__rice__value"><?= $total_new_price ?></span>
                  </div>
                  <div class="checkout__order__list">
                    <span>Phí vận chuyển:</span>
                    <span>0</span>
                  </div>
                  <div class="checkout__order__total__price">
                    <span>Tổng cộng</span>
                    <span class="checkout__order__total__price_value total-price">
                      <?= $total_new_price ?>
                    </span>
                  </div>
                </div>
                <div class="payment-methods">
                  <div class="form-check payment-check">
                    <input class="form-check-input" type="radio" value="1" name="pttt" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Thanh toán khi nhận hàng
                    </label>
                  </div>
                  <div class="form-check payment-check">
                    <input class="form-check-input" type="radio" value="2" name="pttt" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Thanh toán bằng chuyển khoản
                    </label>
                  </div>
                  <div class="form-check payment-check paypal">
                    <input class="form-check-input" type="radio" value="3" name="pttt" id="flexRadioDefault3" checked>
                    <label class="form-check-label" for="flexRadioDefault3">
                      Thanh toán online
                    </label>
                    <img src="../../du_an1/asset/images/payment-cards.png" alt="">
                  </div>
                </div>
                <button type="button" class="site-btn" id="btn-pay">Thanh toán <span class="btn-pay"><?= $total_new_price ?></span></button>
              </div>
            </div>
          </div>
      </div>
    </div>
    </form>
    </div>
    </div>
  </section>
<?php else : ?>
<div class="empty-space">
</div>
<?php endif ?>
<?php require "./includes/footer.php" ?>