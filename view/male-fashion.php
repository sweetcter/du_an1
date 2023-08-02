

<!--  favoriteProduct-->
<div id="favoriteProduct-modal" class="favoriteProduct-modal">
  <div id="favoriteProduct" class="favoriteProduct">
    <div class="favoriteProduct-header">
      <div class="favoriteProduct-title">
        <i class="fa-regular fa-heart header-content-heart"></i>
        <span>Sản phẩm yêu thích</span>
      </div>
      <i id="favoriteProduct-header-close" class="fa-solid fa-xmark favoriteProduct-header-close"></i>
    </div>
    <div class="favoriteProduct-containter">
      <div class="favoriteProduct-info">
        <a href="#" class="favoriteProduct-img">
          <div class="favoriteProduct-img-first">
            <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" />
          </div>
          <div class="favoriteProduct-second-img">
            <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" />
          </div>
        </a>
        <div class="favoriteProduct-details">
          <a href="" class="favoriteProduct-link">Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop</a>
          <div class="favoriteProduct-option">
            <div class="favoriteProduct-choose">
              <div class="favoriteProduct-choose-color">
                Màu sắc
                <i class="fa-solid fa-angle-down"></i>
                <div class="favoriteProduct-choose-color-list">
                  <span>
                    <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" />
                    BLACK
                  </span>
                  <span>
                    <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" />
                    WHITE
                  </span>
                  <span>
                    <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" />
                    GRAY
                  </span>
                </div>
              </div>
              <div class="favoriteProduct-choose-size">
                SIZE
                <i class="fa-solid fa-angle-down"></i>
                <div class="favoriteProduct-choose-size-list">
                  <span>M</span>
                  <span>L</span>
                  <span>Xl</span>
                </div>
              </div>
            </div>
            <div class="favoriteProduct-inc">
              <i class="fa-solid fa-minus" id="favoriteProduct-inc-minus"></i>
              <input type="number" value="1" id="favoriteProduct-inc-quantity" class="favoriteProduct-inc-quantity" />
              <i class="fa-solid fa-plus" id="favoriteProduct-inc-plus"></i>
            </div>
            <span class="favoriteProduct-price">199.000 ₫</span>
            <form action="index.php?url=cart_shop" method="post">
              <div class="favoriteProduct-button">Thêm vào giỏ hàng</div>
            </form>
          </div>
        </div>
        <div class="favoriteProduct-close">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end -->
<!-- Start Cart -->
<div id="cart-modal" class="cart-modal">
  <div id="cart-modal-container" class="cart-modal-container">
    <div class="cart-header-title">
      <i class="fa-solid fa-cart-shopping"></i>
      <span>Giỏ hàng</span>
    </div>
    <div class="cart-header-second">
      <span>3 sản phẩm</span>
      <i id="cart-header-close" class="fa-solid fa-xmark favoriteProduct-header-close"></i>
    </div>
    <div class="favoriteProduct-containter">
      <div class="favoriteProduct-info">
        <a href="#" class="favoriteProduct-img">
          <div class="favoriteProduct-img-first">
            <img src="../<?= $ROOT_URL ?>/asset/images/product1.jpg" alt="" />
          </div>
        </a>
        <div class="favoriteProduct-details">
          <form action="cart_shop" method="post">
            <a href="" class="favoriteProduct-link">Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop</a>
            <div class="favoriteProduct-option">
              <div class="favoriteProduct-choose">
                <div class="favoriteProduct-choose-color">
                  Màu sắc
                  <i class="fa-solid fa-angle-down"></i>
                  <div class="favoriteProduct-choose-color-list">
                    <span>
                      <img src="../<?= $ROOT_URL ?>/asset/images/aothuntayngan1.jpg" alt="" />
                      BLACK
                    </span>
                    <span>
                      <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganden.jpg" alt="" />
                      WHITE
                    </span>
                    <span>
                      <img src="../<?= $ROOT_URL ?>/asset/images/aothuntaynganbe.jpg" alt="" />
                      GRAY
                    </span>
                  </div>
                </div>
                <div class="favoriteProduct-choose-size">
                  SIZE
                  <i class="fa-solid fa-angle-down"></i>
                  <div class="favoriteProduct-choose-size-list">
                    <span><input type="radio" name="size" value="M"> M</span>
                    <span><input type="radio" name="size" value="L"> L</span>
                    <span><input type="radio" name="size" value="XL"> XL</span>
                  </div>
                </div>
              </div>
              <div class="favoriteProduct-inc">
                <i class="fa-solid fa-minus" id="favoriteProduct-inc-minus"></i>
                <input name="quantity" type="number" value="1" id="favoriteProduct-inc-quantity" class="favoriteProduct-inc-quantity" />
                <i class="fa-solid fa-plus" id="favoriteProduct-inc-plus"></i>
              </div>
              <span class="favoriteProduct-price"> 199.000 ₫</span>
              <input name="cart_add" type="submit" value="Thêm vào giỏ hàng" class="favoriteProduct-button">
              <input type="hidden" name="product_name" value="Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop">
            </div>
          </form>
        </div>
      </div>
      <div class="favoriteProduct-close">
        <i class="fa-solid fa-xmark"></i>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End -->

<div class="wrapper">
  <ul class="breadcrumbs">
    <li>Trang chủ /</li>
    <li>Thời trang nam</li>
  </ul>

  <main id="main-content">
    <div class="main-banner">
      <img src="../../du_an1/asset/images/quan-ao-thoi-trang-nam.jpg" alt="" class="main-banner-img" />
    </div>

    <h3 class="category-title">Thời Trang Nam</h3>

    <div class="functions">
      <div class="filter-function">
        Bộ lọc
        <i class="fa-solid fa-filter"></i>
      </div>
      <div class="view-function">
        <strong>363</strong>
        Sản phẩm
      </div>php
      <div class="sort-function">
        Sắp xếp
        <form action="">
          <select name="" id="" class="sort-function-select">
            <option value="">Mặc định</option>
          </select>
        </form>
      </div>
    </div>

    <div class="main-colums">
      <!-- block filter -->

      <div class="filter-sidebar">
        <div class="filter-block">
          <div class="filter-category active">
            <ul>
              DANH MỤC
            </ul>
            <i class="fa-solid fa-chevron-down filter-dropdown"></i>
          </div>
          <div class="filter-list">
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
          </div>
        </div>

        <div class="filter-block">
          <div class="filter-category">
            <ul>
              NHÓM SẢN PHẨM
            </ul>
            <i class="fa-solid fa-chevron-down filter-dropdown"></i>
          </div>
          <div class="filter-list">
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Áo Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Quần Nam</a>
            </li>
          </div>
        </div>
        <div class="filter-block">
          <div class="filter-category">
            <ul>
              GIỚI TÍNH
            </ul>
            <i class="fa-solid fa-chevron-down filter-dropdown"></i>
          </div>
          <div class="filter-list">
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Nam</a>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Unisex</a>
            </li>
          </div>
        </div>
        <div class="filter-block">
          <div class="filter-category">
            <ul>
              SIZE
            </ul>
            <i class="fa-solid fa-chevron-down filter-dropdown"></i>
          </div>
          <div class="filter-list flex-col-4">
            <span class="filter-list-size"> 28 </span>
            <span class="filter-list-size"> M </span>
            <span class="filter-list-size"> L </span>
            <span class="filter-list-size"> xl</span>
          </div>
        </div>

        <div class="filter-block">
          <div class="filter-category">
            <ul>
              MÀU SẮC
            </ul>
            <i class="fa-solid fa-chevron-down filter-dropdown"></i>
          </div>
          <div class="filter-list row-col-2">
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manShirt" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manShirt">
              </label>
              <a href="#">Đen</a>
              <div class="filter-list-color" style="background-image: url('../<?= $ROOT_URL ?>/asset/images/black.png')"></div>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Trắng</a>
              <div class="filter-list-color" style="background-image: url('../<?= $ROOT_URL ?>/asset/images/white.png')"></div>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Be</a>
              <div class="filter-list-color" style="background-image: url('../<?= $ROOT_URL ?>/asset/images/be.png')"></div>
            </li>
            <li class="filter-category-name">
              <input type="checkbox" name="" id="filter-checkbox-manPants" class="filter-checkbox" />
              <label class="filter-newCheckbox" for="filter-checkbox-manPants"></label>
              <a href="#">Xám bạc</a>
              <div class="filter-list-color" style="background-image: url('../<?= $ROOT_URL ?>/asset/images/xam_bac.png')"></div>
            </li>
          </div>
        </div>
        <div class="filter-block">
          <div class="filter-category">
            <ul>
              GIÁ TIỀN
            </ul>
            <i class="fa-solid fa-chevron-down filter-dropdown"></i>
          </div>
          <div class="filter-list">
            <div id="multi-range-slider" class="filter-price"></div>
            <div class="filter-price-control">
              <div>
                <span>₫</span><span id="start-value" class="filter-price-min">79000đ</span>
              </div>
              <div>
                <span>₫</span><span id="end-value" class="filter-price-max">1375000đ</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product-colum">
        <div class="product-row row-col-4">
          <?php $product_result = select_home_product(true); ?>
          <?php foreach($product_result as $value): ?>
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img src="../<?= $ROOT_URL ?><?= $value['main_image_url'] ?>" alt="" class="product-image" />
              <img src="../<?= $ROOT_URL ?><?= $value['hover_main_image_url'] ?>" alt="" class="product-image-second" />
            </a>
            <div class="product-title">
              <a href="./index.php?action=product_detail&product_id=<?= $value['product_id']?>" class="product-name">
              <?= $value['product_name'] ?>
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <!-- format tiền tệ việt nam -->
              <?php 
              $locale = 'vi_VN';
              $currency = $value['product_price'];
              $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY); 
              $product_vn_price = $formatter->format($currency);
              ?>
              <span class="product-newPrice"><?= $product_vn_price ?></span>
              <span class="product-oldPrice">499.000₫</span>
            </div>
            <span class="product-newProduct">
              <img src="../<?= $ROOT_URL ?>/asset/images/Label_New_Arrivals_14T7.png" alt="" />
            </span>
            <span class="product-discount"> -2% </span>
            <!-- Select color by product -->
            <?php $product_color_result = select_product_color($value['product_code']); ?>
            <div class="product-color-list">
              <?php foreach($product_color_result as $value): ?>
              <div class="product-color">
                <div class="product-color-child">
                  <img src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>" alt="" class="product-color-img"  />
                </div>
                <div class="product-color-hover">
                  <img src="../<?= $ROOT_URL ?><?= $value['color_image'] ?>" alt="" class="product-color-img-hover" />
                  <span class="product-color-name"> <?= $value['color_name'] ?> </span>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
          <!-- end item -->
          <?php endforeach ?>
        </div>

        <ul class="home-pagination">
          <li class="home-pagination-item home-pagination-disable">
            <a href="#" class="home-pagination-link">
              <i class="fa-solid fa-angle-left home-pagination-icon"></i>
            </a>
          </li>
          <li class="home-pagination-item home-pagination-disable">
            <a href="#" class="home-pagination-link">
              <i class="fa-solid fa-angles-left home-pagination-icon"></i>
            </a>
          </li>
          <li class="home-pagination-item home-pagination-active">
            <a class="home-pagination-link" href="#">1</a>
          </li>
          <li class="home-pagination-item">
            <a class="home-pagination-link" href="#">2</a>
          </li>
          <li class="home-pagination-item">...</li>
          <li class="home-pagination-item">
            <a class="home-pagination-link" href="#">15</a>
          </li>
          <li class="home-pagination-item">
            <a class="home-pagination-link" href="#">16</a>
          </li>
          <li class="home-pagination-item">
            <a href="#" class="home-pagination-link">
              <i class="fa-solid fa-angle-right home-pagination-icon"></i>
            </a>
          </li>
          <li class="home-pagination-item">
            <a href="#" class="home-pagination-link">
              <i class="fa-solid fa-angles-right home-pagination-icon"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <div class="product-suggest">
    <h3 class="product-suggest-title">
      GỢI Ý CHO BẠN: CÁC SẢN PHẨM ĐƯỢC QUAN TÂM NHẤT
    </h3>
    <div class="my-slickSilder">
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
      <!-- start item -->
      <div class="product-item">
        <a href="#" class="product-image-item">
          <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-image" />
        </a>
        <div class="product-title">
          <a href="#" class="product-name">
            Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
          </a>
        </div>
        <div class="product-price">
          <span class="product-newPrice">441.000₫</span>
          <span class="product-oldPrice">499.000₫</span>
          <span class="product-discount"> -2% </span>
        </div>
        <div class="product-color-list">
          <a href="#" class="product-color">
            <div class="product-color-child">
              <img src="../<?= $ROOT_URL ?>/asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg" alt="" class="product-color-img" />
            </div>
          </a>
        </div>
      </div>
      <!-- end item -->
    </div>
  </div>
</div>


