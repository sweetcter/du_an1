
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
            <span class="<?= isset($_COOKIE['notification']) ? "noti-success" : "" ?> "><?= $notification = isset($_COOKIE['notification']) ? $_COOKIE['notification'] : ""; ?></span>
            <form action="..<?= $ADMIN_URL . $PRODUCT_URL; ?>/progess_add_product.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="product_name">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_price">Giá sản phẩm</label>
                    <input type="number" class="form-control" name="product_price" id="product_price" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_discount">Giảm giá</label>
                    <input type="number" class="form-control" name="product_discount" id="product_discount" required>
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
                <div class="form-group mb-3">
                    <label for="product_quantity">Số lượng</label>
                    <input type="number" class="form-control" name="product_quantity" id="product_quantity" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_code">Mã sản phẩm</label>
                    <input type="text" class="form-control" name="product_code" id="product_code" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_color_name">Tên màu</label>
                    <input type="text" class="form-control" name="product_color_name" id="product_color_name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="product_color">Loại màu</label>
                    <select class="form-control" name="product_color" id="product_color">
                        <option value="Black">Black</option>
                        <option value="White">White</option>
                        <option value="Be">Be</option>
                        <option value="Xám/Bạc">Xám/Bạc</option>
                        <option value="Xanh Da Trời">Xanh Da Trời</option>
                        <option value="Xanh Navy">Xanh Navy</option>
                        <option value="Xanh lá">Xanh lá</option>
                        <option value="Xanh Olive">Xanh Olive</option>
                        <option value="Nâu">Nâu</option>
                        <option value="Đỏ">Đỏ</option>
                        <option value="Hồng">Hồng</option>
                        <option value="Cam">Cam</option>
                        <option value="Vàng">Vàng</option>
                        <option value="Tím">Tím</option>
                        <option value="Phối màu">Phối màu</option>
                    </select>
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
                    <label for="import_date">Ngày nhập</label>
                    <input type="date" class="form-control" name="import_date" id="import_date" required>
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
