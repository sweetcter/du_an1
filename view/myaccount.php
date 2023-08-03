
    <div class="wrapper">
      <main id="main-content">
        <div class="main-colums">
          <!-- block filter -->

          <div class="filter-sidebar">



          </div>
        </div>
        <div class="container">

          <div class="colums row-col-2">
          
            <div class="sidebar-main">
              <div class="title_taikhoan">
                <i class="fa-regular fa-user header-content-user"></i>
                <span>Tài khoản của bạn</span>
              </div>
              <div class="nav_items">


                <div class="nav_title">
                  <strong><?php if (isset($_SESSION['username'])) echo $_SESSION['username']['full_name'] ?></strong>
                  <span>NEW</span>
                </div>
                <hr>
                <ul><br>
                  <li class="nav_item"><a href="">Thông tin tài khoản</a></li><br>
                  <li class="nav_item"><a href="">Địa chỉ giao hàng</a></li><br>
                  <li class="nav_item"><a href="">Lịch sử mua hàng</a></li><br>
                  <li class="nav_item"><a href="">Sản phẩm yêu thích</a></li><br>
                  <br>
                  <hr>
                  <br>
                  <li class="nav_item"><a href="index.php?action=thoat">Đăng xuất</a></li>

                </ul>

              </div>

            </div>

            <div class="colums_main">
              <div class="page-title">
                <h2>Thông tin tài khoản</h2>
                <span>Bạn có thể cập nhật thông tin của mình ở trang này</span>
              </div>
              <hr>
              <div class="account-information row-col-2">
                <?php
                if (isset($_SESSION['username'])&&(is_array($_SESSION['username']))) {
                  extract($_SESSION['username']);
                }else{
                  echo '';
                }
                ?>
                <div class="info">
                  <h3>Thông tin đăng nhập</h3>
                  <p>
                    <span>Email:</span>
                    <strong><?php if(isset($_SESSION['username'])) echo $_SESSION['username']['email'] ?></strong>
                  </p>
                  <p>
                    <span>Phone:</span>
                    <strong><?php if(isset($_SESSION['username'])) echo $_SESSION['username']['phone'] ?></strong>
                  </p>

                </div>
                <form action="index.php?action=updatetk" method="POST" id="profile-form" enctype="multipart/form-data">
                  <div class="thkn">
                    <h3>Thông tin cá nhân</h3>
                    <div class="">
                      

                      <div class="col-lg-6">
                        <div class="checkout__input">
                          <p>Username <span>*</span></p>
                          <input type="text" id="username" name='username' value="<?php if(isset($username)) echo $username  ?>" placeholder="username" required>
                        </div>
                      </div>
                      <div class="row-col-6">

                        <div class="checkout__input">
                          <p>Họ và tên <span>*</span></p>
                          <input type="text" id="fullname" name='full_name' value="<?php if(isset($full_name)) echo $full_name  ?>" placeholder="Họ và tên" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="checkout__input">
                          <p>Email <span>*</span></p>
                          <input type="email" id="email" name='email' value="<?php if(isset($email)) echo $email ?>" placeholder="Your email" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="checkout__input">
                          <p>Số điện thoại <span>*</span></p>
                          <input type="tel" value="<?php if(isset($phone)) echo $phone ?>" id="Number" name='phone' required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="checkout__input">
                          <p>Địa chỉ <span>*</span></p>
                          <input type="text" value="<?php if(isset($address)) echo $address ?>" id="address" name='address' required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="checkout__input">
                          <p>Password <span>*</span></p>
                          <input type="password" name='password' id="password" value="<?php if(isset($password)) echo $password ?>" placeholder="Enter a password" required>
                        </div>
                      </div>
                    </div>
                    <style>
                      .thkn a {
                        text-decoration: none;
                        color: white;

                      }
                    </style>
                    <div class="submit">
                      <input type="hidden" name="id" value="<?= $id ?>">
                      <input type="submit" name="thaydoi" id="updatetk" value="Lưu thay đổi" style="color: white;">
                    </div>

                    <?php
                    if (isset($thongbao) && ($thongbao) != "") {
                      echo $thongbao;
                    }
                    ?>
                  </div>

                </form>
              </div>


            </div>

          </div>
        </div>
  </body>

  </html>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }
  </script>

  <!-- -----js img--------- -->

  <script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img")

    SmallImg[0].onclick = function() {
      ProductImg.src = SmallImg[0].src;
    }

    SmallImg[1].onclick = function() {
      ProductImg.src = SmallImg[1].src;
    }

    SmallImg[2].onclick = function() {
      ProductImg.src = SmallImg[2].src;
    }

    SmallImg[3].onclick = function() {
      ProductImg.src = SmallImg[3].src;
    }
  </script>
