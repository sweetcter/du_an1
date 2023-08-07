<?php require "./header.php" ?>
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
            <a href="./index.php?act=view_product" class="mb-4">
                 <button class="btn btn-primary">Dach sach</button>
            </a>
        <span class="<?= isset($_COOKIE['notification']) ? "noti-success" : "" ?> "><?= $notification = isset($_COOKIE['notification']) ? $_COOKIE['notification'] : ""; ?></span>
        <form action="..<?= $ADMIN_URL . $PRODUCT_URL; ?>/progess_add_product.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="product_name">Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name" id="product_name" required>
            </div>
            <div class="form-group mb-3">
                <label for="product_code">Mã sản phẩm</label>
                <input type="text" class="form-control" name="product_code" id="product_code" required>
            </div>
            <div class="form-group mb-3">
                <label for="product_price">Giá sản phẩm</label>
                <input type="number" class="form-control" name="product_price" id="product_price" required>
            </div>
            <div class="form-group mb-3">
                <label for="product_discount">Giảm giá</label>
                <input type="number" class="form-control" name="product_discount" min="0" max="99" id="product_discount" required>
            </div>
            <div class="form-group mb-3">
                <label for="product_size">Kích cỡ</label>
                <?php $size_result = select_all_size(); ?>
                <select class="form-control" name="product_size" id="product_size">
                    <?php foreach ($size_result as $value) : ?>
                        <option value="<?= $value['size_id']; ?>"><?= $value['size_name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="product_quantity">Số lượng</label>
                <input type="number" class="form-control" name="product_quantity" id="product_quantity" required>
            </div>
            <div class="form-group mb-3">
                <label for="product_color">Loại màu</label>
                <?php $color_result = select_all_color(); ?>
                <select class="form-control" name="color_type" id="ad_color_type">
                    <?php foreach ($color_result as $value) : ?>
                        <option value="<?= $value['color_type_id']; ?>"><?= $value['color_type_name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="product_color_name">Tên màu</label>
                <input type="text" class="form-control" name="product_color_name" id="product_color_name" required>
            </div>
            <div class="form-group mb-3">
                <label for="product_color_image">Ảnh Màu</label>
                <input type="file" class="form-control" name="product_color_image" id="product_color_image" required>
            </div>
            <div class="form-group mb-3">
                <label for="product_main_image">Ảnh chính</label>
                <input type="file" class="form-control" name="product_main_image" id="product_main_image">
            </div>
            <div class="form-group mb-3">
                <label for="product_hover_main_image">Ảnh phụ</label>
                <input type="file" class="form-control" name="product_hover_main_image" id="product_hover_main_image">
            </div>
            <div class="form-group mb-3">
                <label for="product_main_image">Chi tiết ảnh sản phẩm</label>
                <input type="file" class="form-control" name="product_detail_image[]" id="product_detail_image" multiple>
            </div>
            <div class="form-group mb-3">
                <label for="product_desc">Mô tả</label>
                <textarea type="text" class="form-control" rows="6" name="product_desc" id="product_desc" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="product_cat_id">Loại sản phẩm</label>
                <!-- Select product caregory id -->
                <select name="product_cat_id" id="product_cat_id" class="form-control">
                    <?php $category_result =  listCategory(); ?>
                    <?php foreach ($category_result as $value) : ?>
                        <option value="<?= $value['id_category'] ?>"><?= $value['name_category'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" name='addProduct' class="btn btn-success">Thêm</button>
                <button type="reset" class="btn btn-warning">Nhập lại</button>
            </div>
        </form>
    </div>
</div>

<div class="overlay"></div>
<?php require "./footer.php" ?>
