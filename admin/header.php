<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Protend - Project Management Admin Dashboard HTML Template</title>
  <link rel="shortcut icon" href="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/images/favicon.png" type="image/png" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet" />
  <link href="../../../unpkg.com/boxicons%402.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/owl.carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/css/grid.css" />
  <link rel="stylesheet" href="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/css/style1.css" />
  <link rel="stylesheet" href="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/css/responsive.css" />
  <link rel="stylesheet" href="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/css/style.css" />
</head>

<body class="sidebar-expand">
  <div class="sidebar">
    <div class="sidebar-logo">
      <a href="../..<?= $ROOT_URL ?>/admin/index.php">
        <img src="../..<?= $ROOT_URL . $ASSET_URL; ?>/images/logo.png" alt="Protend logo" width="200px" />
        <style>
          .sidebar-logo img {
            object-fit: cover;
            height: auto;
          }
        </style>
      </a>
      <div class="sidebar-close" id="sidebar-close">
        <i class="bx bx-left-arrow-alt"></i>
      </div>
    </div>

    <div class="simlebar-sc" data-simplebar>
      <ul class="sidebar-menu tf">
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php">
            <i class="bx bxs-home"></i>
            <span>Trang chủ</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=listCategory">
            <i class="bx bxs-bolt"></i>
            <span>Danh mục</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=view_banner">
            <i class="bx bxs-bolt"></i>
            <span>Banner</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=view_product">
            <i class="bx bxs-user"></i>
            <span>Sản phẩm</span>
          </a>
        </li>
        <li>
          <a href=".../..<?= $ROOT_URL ?>/admin/index.php?act=view_product">
            <i class="bx bxs-user"></i>
            <span>Size</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=view_product">
            <i class="bx bxs-user"></i>
            <span>Color</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=user">
            <i class="bx bxs-dashboard"></i>
            <span>Tài khoản</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=view_product">
            <i class="bx bxs-dashboard"></i>
            <span>Hóa đơn</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=view_comment">
            <i class="bx bx-calendar"></i>
            <span>Bình luận</span>
          </a>
        </li>
        <li>
          <a href="../..<?= $ROOT_URL ?>/admin/index.php?act=view_product">
            <i class="bx bxs-component"></i>
            <span>Thống kê</span>
          </a>
        </li>
        <li>
          <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
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