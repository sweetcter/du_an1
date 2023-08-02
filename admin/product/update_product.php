
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
            <span class="<?= isset($_COOKIE['notification']) ? "noti-success" : "" ?> ">
                <?= $notification = isset($_COOKIE['notification']) ? $_COOKIE['notification'] : ""; ?>
            </span>
            <!-- Select product by id -->
            <?php
            if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];
                $product_result = select_product_by_id($product_id);
                $color_result = select_color_by_id($product_id);
                $image_result = select_images_by_id($product_id);
                $size_result = select_size_by_id($product_id);
            ?>
                <form action="..<?= $ADMIN_URL . $PRODUCT_URL; ?>/progess_update_product.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="<?= $product_id; ?>">
                    <div class="form-group mb-3">
                        <label for="product_name">Tên sản phẩm</label>
                        <input type="text" class="form-control" value="<?= $product_result['product_name']; ?>" name="product_name" id="product_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_price">Giá sản phẩm</label>
                        <input type="number" class="form-control" value="<?= $product_result['product_price']; ?>" name="product_price" id="product_price" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_quantity">Số lượng</label>
                        <input type="number" class="form-control" name="product_quantity" id="product_quantity" value="<?= $product_result['quantity'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_discount">Giảm giá</label>
                        <input type="number" class="form-control" value="<?= $product_result['discount']; ?>" name="product_discount" id="product_discount" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_size">Kích cỡ</label>
                        <select class="form-control" name="product_size" id="product_size">
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="34">34</option>
                            <option value="36">36</option>
                            <option value="36">XS</option>
                            <option value="36">S</option>
                            <option value="36">M</option>
                            <option value="36">L</option>
                            <option value="36">XL</option>
                            <option value="36">XXL</option>
                        </select>
                    </div>
                    <input type="hidden" name="size_id" value="<?= $size_result['size_id'] ?>">
                    <div class="form-group mb-3">
                        <label for="product_code">Mã sản phẩm</label>
                        <input type="text" class="form-control" value="<?= $product_result['product_code']; ?>" name="product_code" id="product_code" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_color_name">Tên màu</label>
                        <input type="text" class="form-control" value="<?= $color_result['color_name'] ?>" name="product_color_name" id="product_color_name" required>
                    </div>
                    <input type="hidden" name="color_id" value="<?= $color_result['color_id'] ?>">
                    <div class="form-group mb-3">
                        <label for="product_color">Loại màu</label>
                        <select class="form-control" name="product_color" id="product_color">
                            <option value="">Black</option>
                            <option value="1">White</option>
                            <option value="1">Be</option>
                            <option value="1">Xám/Bạc</option>
                            <option value="1">Xanh Da Trời</option>
                            <option value="1">Xanh Navy</option>
                            <option value="1">Xanh lá</option>
                            <option value="1">Xanh Olive</option>
                            <option value="1">Nâu</option>
                            <option value="1">Đỏ</option>
                            <option value="1">Hồng</option>
                            <option value="1">Cam</option>
                            <option value="1">Vàng</option>
                            <option value="1">Tím</option>
                            <option value="1">Phối màu</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>
                            Ảnh màu cũ
                        </label>
                        <div class="mb-3">
                            <img src="../..<?= $ROOT_URL ?><?= $color_result['color_image'] ?>" width="100px" alt="">
                        </div>
                        <label for="product_color_image">Ảnh màu</label>
                        <input type="file" class="form-control" name="product_color_image" id="product_color_image">
                        <input type="hidden" name="old_color_image" value="<?= $color_result['color_image'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>
                            Ảnh chính cũ
                        </label>
                        <div class="mb-3">
                            <img src="../..<?= $ROOT_URL ?><?= $product_result['main_image_url'] ?>" width="100px" alt="">
                        </div>
                        <label for="product_main_image">Ảnh chính</label>
                        <input type="file" class="form-control" name="product_main_image" id="product_main_image" multiple>
                        <input type="hidden" name="old_main_image" value="<?= $product_result['main_image_url'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>
                            Ảnh phụ cũ
                        </label>
                        <div class="mb-3">
                            <img src="../..<?= $ROOT_URL ?><?= $product_result['hover_main_image_url'] ?>" width="100px" alt="">
                        </div>
                        <label for="product_hover_main_image">Ảnh phụ</label>
                        <input type="file" class="form-control" name="product_hover_main_image" id="product_hover_main_image" multiple>
                        <input type="hidden" name="old_second_image" value="<?= $product_result['hover_main_image_url'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label style="display: block;">
                            Ảnh chi tiết sản phẩm cũ
                        </label>
                        <?php foreach ($image_result as $key => $value) : ?>
                            <div class="mb-3" style="display:inline-block;">
                                <img src="../..<?= $ROOT_URL ?><?= $value['image_url'] ?>" width="100px" alt="">
                            </div>
                        <?php endforeach ?>
                        <br>
                        <label for="product_detail_image">Ảnh chi tiết sản phẩm mới</label>
                        <input type="file" class="form-control" name="product_detail_image[]" id="product_detail_image" multiple>
                        <?php foreach ($image_result as $key => $value) : ?>
                            <input type="hidden" name="old_detail_image[]" value="<?= $value['image_url'] ?>">
                        <?php endforeach ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_desc">Mô tả</label>
                        <textarea type="text" class="form-control" rows="6" name="product_desc" id="product_desc" required><?= $product_result['product_desc']; ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="import_date">Ngày nhập</label>
                        <input type="date" class="form-control" value="<?= $product_result['product_import_date'] ?>" name="import_date" id="import_date" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_cat_id">Loại sản phẩm</label>
                        <!-- Select product caregory id -->
                        <select name="product_cat_id" id="product_cat_id" class="form-control">
                            <option value="1">Áo nam</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Sửa</button>
                        <button type="reset" class="btn btn-warning">Nhập lại</button>
                    </div>
                </form>
            <?php } else { ?>
                <?= "Không có id" ?>
            <?php } ?>
        </div>
    </div>

    <div class="overlay"></div>

   