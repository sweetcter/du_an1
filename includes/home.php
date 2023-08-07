<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700;800;900&family=Inter:wght@200;300;400;500;600&family=Montserrat:wght@300;400;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/jqueryUI.css" />
  <link rel="stylesheet" type="text/css" href="../<?= $ROOTt_URL ?>/asset/slick-master/slick/slick.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/slick.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/base.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/grid.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/style.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/index.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/spct.css" />
  <link rel="stylesheet" href="../<?= $ROOTt_URL ?>/asset/css/user.css" />
</head>

<body>
  <style>
    .form-group input {
      margin: 0;
    }

    .thkn p {
      margin-left: 0;
    }
  </style>
  <div id="register-modal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span id="close-button" class="close">&times;</span>
      <h2>Đăng ký</h2>
      <form action="index.php?action=dangky" method="POST" id="register-form">
        <div class="form-group">
          <label for="full_name">Full Name*</label>
          <input type="text" name="full_name" id="full_name" placeholder="Full name" required />
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

        <button type="submit" class="buttonregister"  name="dangky">Đăng ký</button>
      </form>
    </div>
  </div>
  <div id="quen-modal" class="modal">
    <div class="modal-content">
      <span class="close" id="quenpass">&times;</span>
      <h2>Quên mật khẩu</h2>
      <form id="forgotPasswordForm" method="post" action="index.php?action=quenmk">
        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" name="email" id="email" placeholder="Your email" required />
        </div>
        <button type="submit" name="btnsubmit">Gửi</button>
      </form>
    </div>
  </div>
  <div id="my-modal" class="modal1">
    <div class="modal-content">
      <span class="sign-in-close">&times;</span>
      <h2 style="text-align: center">Đăng nhập</h2>
      <form action="index.php?action=login" method="POST">
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
        <button type="submit" name="login" class="buttonregister" id="submit-btn">
          Đăng nhập <style></style>
        </button>
        <br />
        <div class="dangky">
          <span>Bạn chưa có tài khoản?</span>
          <a href="">Đăng ký thành viên</a>
        </div>
      </form>
      <p id="message"></p>
    </div>
  </div>
  <!-- Nav -->
  <div></div>
  <header class="header">
    <div class="header-menu-sidebar">
      <ul class="header-menu-top-title">
        <li><a href="#" class="menu-sidebar-active">NAM</a></li>
        <li><a href="#">NỮ</a></li>
        <li><a href="#">BỘ SƯU TẬP</a></li>
      </ul>

      <ul class="header-menu-middle">
        <li><a href="#">XEM TẤT CẢ</a></li>
        <li><a href="#">NEW ARRIVALS</a></li>
        <li><a href="#">BEST SELLERS</a></li>
        <li>
          <a href="#">ÁO NAM </a>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li>
          <a href="#">QUẦN NAM</a>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li><a href="#">ĐỒ BƠI - ĐỒ ĐI BIỂN</a></li>
        <li>
          <a href="#">PHỤ KIỆN </a>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li>
          <a href="#">ƯU ĐÃI </a>
          <span class="sale">Sale</span>
          <i class="fa-solid fa-plus header-menu-middle-plus"></i>
          <i class="fa-solid fa-minus header-menu-middle-minus"></i>
        </li>
        <li><a href="#">TIN THỜI TRANG</a></li>
      </ul>
      <ul class="header-menu-bottom">
        <i class="fa-regular fa-user header-menu-icon-user"></i>

        <?php if (!isset($_SESSION['username'])) : ?>
              <li id="open-modal-btn">ĐĂNG NHẬP</li>
              <li id="register-button">ĐĂNG KÝ</li>
          <?php else: ?>
            <?php if (isset($_SESSION['username']) && $_SESSION['username']['role'] == 1) : ?>
              <li id="open-modal-btn"> <a style="color: #000; text-decoration: none;"  href="../../du_an1/admin/index.php">ADMIN</a> </li>   
              <li id="open-modal-btn"> <a style="color: #000; text-decoration: none;"  href="../../du_an1/index.php?action=thoat">ĐĂNG XUẤT</a> </li>   
              <li id="open-modal-btn"> <a style="color: #000; text-decoration: none;"  href="../../du_an1/index.php?action=myaccount">MY ACCOUNT</a> </li>    
            <?php else: ?>
              <li id="open-modal-btn"> <a style="color: #000; text-decoration: none;"  href="../../du_an1/index.php?action=thoat">ĐĂNG XUẤT</a> </li>  
              <li id="open-modal-btn"> <a style="color: #000; text-decoration: none;"  href="../../du_an1/index.php?action=myaccount">MY ACCOUNT</a> </li>   



            <?php endif;?>
          <?php endif;?>
      </ul>
    </div>
    <!-- Hidden when scoll -->
    <div class="header-bar">
      <img src="../<?= $ROOTt_URL ?>/asset/images/menu.png" alt="" class="header-menu-bar" />
    </div>
    <div class="overlay"></div>
    <div class="header-logo">
      <a href="/du_an1/">
        <img src="../<?= $ROOTt_URL ?>/asset/images/routine_log.png" alt="" class="header-logo-img" />
      </a>
    </div>
    <!-- end -->
    <!-- second header -->
    <ul class="header-nav">
      <div class="header-second-logo">
        <a href="/du_an1/">
          <img src="../<?= $ROOTt_URL ?>/asset/images/routine_log.png" alt="" class="header-logo-img" />
        </a>
      </div>
      <li class="header-nav-item">
        <a class="header-nav-link" href="/du_an1/male-fashion">NAM</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="/du_an1/female-fashion">NỮ</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">NEW</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">BEST</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="#">SALE</a>
      </li>
    </ul>

    <div class="header-content-right">
      <div class="header-search-bar">
        <div>
          <i class="fa-solid fa-magnifying-glass header-search-icon"></i>
        </div>
        <form action="">
          <input type="text" name="" placeholder="Tìm kiếm" class="header-search-content" />
        </form>
      </div>
      <div class="header-content-tool">
        <div>
          <i id="icon_re" class="fa-regular fa-user header-content-user"></i>
        </div>
        <div>
          <i class="fa-regular fa-heart header-content-heart"></i>
        </div>
        <div>
          <i class="fa-solid fa-heart header-content-heart" style="display: none"></i>
        </div>
        <div id="header-content-cart">
          <i class="fa-solid fa-cart-shopping header-content-cart"></i>
        </div>
      </div>
    </div>
  </header>

  <!-- End nav -->