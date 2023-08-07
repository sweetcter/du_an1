<?php require "./includes/header-cart.php" ?>


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

<?php require "./includes/favorite_product.php" ?>
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

<?php require "./includes/cart_modal.php" ?>
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

<?php require "./includes/login_modal.php" ?>
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

<section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Có phiếu giảm giá? <a href="#">Nhấp vào đây</a> để nhập mã của bạn
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>CHI TIẾT THANH TOÁN</h4>
                <form action="" method="post" >
                    <div class="row">
                        <div class="col-lg-8 col-md-6">

                            <div class="checkout__input">
                                <p>Họ Tên<span>*</span></p>
                                <input type="text" > 
                            </div>


                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Tạo một tài khoản?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Tạo tài khoản bằng cách nhập thông tin bên dưới. Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang</p>
                            <div class="checkout__input">
                                <p>Mật khẩu tài khoản<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Gửi hàng đến một địa chỉ khác?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <input type="ext"
                                    placeholder="Ghi chú về đơn đặt hàng của bạn">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Sản Phẩm <span>Thành Tiền</span></div>
                                <ul>
                                    <li>Vegetable’s Package <span>$75.99</span></li>
                                    <li>Fresh Vegetable <span>$151.99</span></li>
                                    <li>Organic Bananas <span>$53.99</span></li>
                                </ul>
                                <div class="checkout__order__total">Tổng Tiền <span>$750.99</span></div>

                                <div class="payment-methods">
                                    <div class="form-check payment-check">
                                        <input class="form-check-input" type="radio" value="1" name="pttt" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Thanh toán khi nhận hàng
                                        </label>
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State /
                                            County, Store Postcode.</p>

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