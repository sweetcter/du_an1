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
      <li id="open-modal-btn">ĐĂNG NHẬP</li>
      <li id="register-button">ĐĂNG KÝ</li>
    </ul>
  </div>
  <!-- Hidden when scoll -->
  <div class="header-bar">
    <img src="../<?= $ROOT_URL ?>/asset/images/menu.png" alt="" class="header-menu-bar" />
  </div>
  <div class="overlay"></div>
  <div class="header-logo">
    <a href="./index.html">
      <img src="../<?= $ROOT_URL ?>/asset/images/routine_log.png" alt="" class="header-logo-img" />
    </a>
  </div>
  <!-- end -->
  <!-- second header -->
  <ul class="header-nav">
    <div class="header-second-logo">
      <a href="./index.html">
        <img src="../<?= $ROOT_URL ?>/asset/images/routine_log.png" alt="" class="header-logo-img" />
      </a>
    </div>
    <li class="header-nav-item">
      <a class="header-nav-link" href="/du_an1/male-fashion">NAM</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-link" href="../../du_an1/index.php?action=female-fashion">NỮ</a>
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
        <i class="fa-regular fa-user header-content-user"></i>
      </div>
      <div>
        <i id="header-content-heart" class="fa-regular fa-heart header-content-heart"></i>
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