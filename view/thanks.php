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
    <form action="../../du_an1/view/progess-signup.php" method="POST" id="register-form" name= 'register-form'  onsubmit=" return validateForm_dangky()">
      <div class="form-group error">
        <label for="full_name">Full Name*</label>
        <input type="text" name="full_name" id="full_name" placeholder="Full name"/>
        <small></small>
      </div>
      <div class="form-group error">
        <label for="username">UserName*</label>
        <input type="text" name="username" id="username" placeholder="Username"/>
        <small></small>
      </div>
      <div class="form-group error">
        <label for="email">Email *</label>
        <input type="email" name="email" id="email" placeholder="Your email"/>
        <small></small>
      </div>

      <div class="form-group error">
        <label for="password">Password *</label>
        <input type="password" name="password" id="password" placeholder="Enter a password"/>
        <small></small>
      </div>
      <div class="form-group error">
        <label for="address">Address *</label>
        <input type="text" name="address" id="address" placeholder="Your address"/>
        <small></small>
      </div>
      <div class="form-group error">
        <label for="phone">Phone *</label>
        <input type="text" name="phone" id="phone" placeholder="Your phone"/>
        <small></small>
      </div>

      <button type="submit" class="buttonregister" name="dangky">Đăng ký</button>
    </form>
  </div>
</div>
<div id="quen-modal" class="modal">
  <div class="modal-content">
    <span class="close" id="close_quen">&times;</span>
    <h2>Quên mật khẩu</h2>
    <form id="forgotPasswordForm"  name='forgotPasswordForm' method="post" action="index.php?action=quenmk">
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" name="email" id="email_pass" placeholder="Your email"/>
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
    <form action="../../du_an1/view/progess-login.php" method="POST" id='login_user' name='login_user' onsubmit=" return validateForm_login()">
      <div class="form-group error">
        <label for="username">Tài khoản:</label>
        <input type="text" id="username_loign" name="username_loign"/>
        <small></small>
      </div>
      <div class="form-group error">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password3" name="password3"/>
        <small></small>
      </div>
      <div class="form-group">
        <a href=""><span class="quenmk">Quên mật khẩu?</span></a>
      </div>
      <br />
      <button type="submit" class="buttonregister" name="login" id="submit-btn">
        Đăng nhập
      </button>

      <br />

    </form>
    <p id="message"></p>
  </div>
</div>
<!--  favoriteProduct-->
<?php require ".$INCLUDES_URL/favorite_product.php" ?>
<!-- end -->
<?php require ".$INCLUDES_URL/cart_modal.php" ?>

<?php require ".$INCLUDES_URL/delete_cart_confirm.php" ?>

<?php require ".$INCLUDES_URL/header_nav.php" ?>
<ul class="breadcrumbs">
    <li>Trang chủ /</li>
    <li>Thanh toán MOMO</li>
</ul>
<div class="wrapper" style="height: calc(100vh - 7.5rem)">
    <?php if ($_GET['message'] == "Giao dịch bị từ chối bởi người dùng.") : ?>
        <div class="empty_product__notifi">
            Thanh toán thất bại
        </div>
        <?php else : ?>
        <div class="empty_product__notifi">
            Thanh toán thành công, đơn hàng đang được xử lý,nhanh chóng được gửi đến bạn.
        </div>
        <a href="<?= $ROOT_URL ?>/order_details_infomation" style="text-align: center;display: block;margin: 12px 0;"><button type="button">Xem đơn hàng của bạn</button></a>
    <?php endif ?>
</div>
<?php require "./includes/footer.php" ?>