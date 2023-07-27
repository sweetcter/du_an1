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
</head>

<body class="sidebar-expand">
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="../view/index.html">
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
                    <a href="./index.html">
                        <i class="bx bxs-home"></i>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="./list-danhmuc.html">
                        <i class="bx bxs-bolt"></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="./list-sanpham.html">
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
                    <a href="./list-taikhoan.html">
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
                    <a href="./list-thongke.html">
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

    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="bx bx-menu"></i>
            </div>
        </div>
        <div class="dropdown d-inline-block mt-12">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/images/avatar/avt-1.png" alt="Header Avatar" />
                <span class="pulse-css"></span>
                <span class="info d-xl-inline-block color-span">
                    <span class="d-block fs-20 font-w600"></span>
                    <span class="d-block mt-7"></span>
                </span>
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                    <span>Profile</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                    <span>My Wallet</span></a>
                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i>
                    <span>Settings</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                    <span>Lock screen</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../index.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="main-content dashboard">
            <div><?= $notification = isset($notification) ? $notification : ""; ?></div>
            
            <form action="..<?= $ADMIN_URL . $PRODUCT_URL; ?>/progess_add_product.php" method="post">
                <div class="form-group mb-3">
                    <label for="product_name">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_price">Giá sản phẩm</label>
                    <input type="text" class="form-control" name="product_price" id="product_price" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_discount">Giảm giá</label>
                    <input type="text" class="form-control" name="product_discount" id="product_discount" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_desc">Mô tả</label>
                    <textarea type="text" class="form-control" rows="6" name="product_desc" id="product_desc" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product_cat_id">Tên sản phẩm</label>
                    <!-- Select product caregory id -->
                    <select name="product_cat_id" id="product_cat_id" class="form-control">
                        <option value="1">Áo nam</option>
                    </select>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <button type="reset" class="btn btn-warning">Nhập lại</button>
                </div>
            </form>
        </div>
    </div>

    <div class="overlay"></div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/jquery/jquery.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/moment/min/moment.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/peity/jquery.peity.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/chart.js/Chart.bundle.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/apexcharts/apexcharts.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/libs/simplebar/simplebar.min.js"></script>

    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/js/main.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/js/dashboard.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/js/shortcode.js"></script>
    <script src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/js/pages/dashboard.js"></script>
</body>

<!-- Mirrored from themesflat.com/html/protend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Nov 2022 08:41:46 GMT -->

</html>