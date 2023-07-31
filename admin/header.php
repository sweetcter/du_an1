
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Protend - Project Management Admin Dashboard HTML Template</title>
    <link
      rel="shortcut icon"
      href="../src/admin/images/favicon.png"
      type="image/png"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="../../../unpkg.com/boxicons%402.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../src/admin/libs/owl.carousel/assets/owl.carousel.min.css"
    />
    <link rel="stylesheet" href="../src/admin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../src/admin/css/grid.css" />
    <link rel="stylesheet" href="../src/admin/css/style1.css" />
    <link rel="stylesheet" href="../src/admin/css/responsive.css" />
  </head>
  <body class="sidebar-expand">
    <div class="sidebar">
      <div class="sidebar-logo">
        <a href="./index.php">
          <img
            src="../../<?= $ROOT_URL?>/asset/images/logo.png"
            alt="Protend logo"
            width="200px"
            style="object-fit: cover;
              height: auto;"
          />
        </a>
        <div class="sidebar-close" id="sidebar-close">
          <i class="bx bx-left-arrow-alt"></i>
        </div>
      </div>

      <div class="simlebar-sc" data-simplebar>
        <ul class="sidebar-menu tf">
          <li>
            <a href="./index.php">
              <i class="bx bxs-home"></i>
              <span>Trang chủ</span>
            </a>
          </li>
          <li>
            <a href="<?= $ROOT_URL?>/admin/add-Category">
              <i class="bx bxs-bolt"></i>
              <span>Danh mục</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=view_product">
              <i class="bx bxs-user"></i>
              <span>Sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="./list-size.html">
              <i class="bx bxs-user"></i>
              <span>Size</span>
            </a>
          </li>
          <li>
            <a href="./list-color.html">
              <i class="bx bxs-user"></i>
              <span>Color</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=user">
              <i class="bx bxs-dashboard"></i>
              <span>Tài khoản</span>
            </a>
          </li>
          <li>
            <a href="./list-bill.html">
              <i class="bx bxs-dashboard"></i>
              <span>Hóa đơn</span>
            </a>
          </li>
          <li>
            <a href="./list-cmt.html">
              <i class="bx bx-calendar"></i>
              <span>Bình luận</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=view_banner">
              <i class="bx bxs-user"></i>
              <span>Banner</span>
            </a>
          </li>
          <li>
            <a href="./list-thongke.html">
              <i class="bx bxs-component"></i>
              <span>Thống kê</span>
            </a>
          </li>
          <li>
            <a
              class="darkmode-toggle"
              id="darkmode-toggle"
              onclick="switchTheme()"
            >
              <div>
                <i class="bx bx-cog mr-10"></i>
                <span>darkmode</span>
              </div>
              <span class="darkmode-switch"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-header">
      <div class="d-flex">
        <div class="mobile-toggle" id="mobile-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </div>
      <div class="dropdown d-inline-block mt-12">
        <button
          type="button"
          class="btn header-item waves-effect"
          id="page-header-user-dropdown"
          data-bs-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <img
            class="rounded-circle header-profile-user"
            src="../src/admin/images/avatar/avt-1.png"
            alt="Header Avatar"
          />
          <span class="pulse-css"></span>
          <span class="info d-xl-inline-block color-span">
            <span class="d-block fs-20 font-w600"></span>
            <span class="d-block mt-7"></span>
          </span>
          <i class="bx bx-chevron-down"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="#"
            ><i class="bx bx-user font-size-16 align-middle me-1"></i>
            <span>Profile</span></a
          >
          <a class="dropdown-item" href="#"
            ><i class="bx bx-wallet font-size-16 align-middle me-1"></i>
            <span>My Wallet</span></a
          >
          <a class="dropdown-item d-block" href="#"
            ><span class="badge bg-success float-end">11</span
            ><i class="bx bx-wrench font-size-16 align-middle me-1"></i>
            <span>Settings</span></a
          >
          <a class="dropdown-item" href="#"
            ><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
            <span>Lock screen</span></a
          >
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" href="../index.php"
            ><i
              class="bx bx-power-off font-size-16 align-middle me-1 text-danger"
            ></i>
            <span>Logout</span></a
          >
        </div>
      </div>
    </div>