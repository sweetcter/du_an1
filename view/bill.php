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
<!-- Start Cart -->
<?php require "./includes/cart_modal.php" ?>
<!-- sign in -->

<!-- Nav -->
<!-- end sign in -->

<?php require "./includes/header_nav.php" ?>
<ul class="breadcrumbs">
  <li>Trang chủ /</li>
  <li>Giỏ hàng</li>
</ul>
<section class="checkout spad">
  <div class="container">
    <h4 class="oder-detail-title">CHI TIẾT THANH TOÁN</h4>
    <div class="checkout__form">
      <form action="" method="post">
        <div class="row-col-2 order">
          <div class="order-info-left">
            <div class="row-col-2 order-info">
              <div class="checkout__input">
                <div class="checkout__tittle">
                  <span>Họ Tên</span> <span>*</span>
                </div>
                <input type="text" required>
              </div>
              <div class="checkout__input">
                <div class="checkout__tittle">
                  <span>Địa chỉ</span> <span>*</span>
                </div>
                <input type="text" required placeholder="Street Address" class="checkout__input__add">
              </div>
              <div class="checkout__input">
                <div class="checkout__tittle">
                  <span>Số điện thoại</span> <span>*</span>
                </div>
                <input type="number" required>
              </div>
              <div class="checkout__input">
                <div class="checkout__tittle">
                  <span>Email</span><span>*</span>
                </div>
                <input type="email" required>
              </div>
            </div>
            <div class="checkout__input">
              <div class="checkout__tittle">
                <span>Ghi chú</span><span>*</span>
              </div>
              <textarea name="" id="" cols="30" rows="8" placeholder="Ghi chú về đơn đặt hàng của bạn" style="width:100%;resize: none;border:1px solid  #ebebeb"></textarea>
            </div>
          </div>
          <div class="order-bill">
            <div class="checkout__order">
              <h4 class="checkout__oder__title">TẠM TÍNH</h4>
              <div class="checkout__order__products">Sản Phẩm <span>Thành Tiền</span></div>
              <ul>
                <li>Vegetable’s Package <span>$75.99</span></li>
              </ul>
              <div class="checkout__order__total">Tổng Tiền <span>$750.99</span></div>

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
                  <p>Pay with cash upon delivery.</p>
                </div>
                <div class="form-check payment-check paypal">
                  <input class="form-check-input" type="radio" value="3" name="pttt" id="flexRadioDefault3" checked>
                  <label class="form-check-label" for="flexRadioDefault3">
                    Thanh toán online
                  </label>
                  <img src="../../du_an1/asset/images/payment-cards.png" alt="">

                </div>
              </div>
              <button type="submit" class="site-btn" id="btn">PLACE ORDER</button>
            </div>
          </div>
        </div>
    </div>
  </div>
  </form>
  </div>
  </div>
</section>
<?php require "./includes/footer.php" ?>