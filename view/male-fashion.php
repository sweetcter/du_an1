<?php require "./includes/header.php" ?>
    <!-- sign up -->
    <div id="register-modal" class="modal">
      <!-- Modal content -->
      <div class="modal-content1">
        <span id="close-button" class="close">&times;</span>
        <h2>Register</h2>
        <form id="register-form">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name1" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email1" name="email" required />
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirm Password:</label>
            <input
              type="password"
              id="confirm-password"
              name="confirm-password"
              required
            />
          </div>
          <button  type="submit" class="buttonregister">Register</button>
        </form>
      </div>
    </div>
    <!-- end sign-up -->
    <!--  favoriteProduct-->
    <div id="favoriteProduct-modal" class="favoriteProduct-modal">
      <div id="favoriteProduct" class="favoriteProduct">
        <div class="favoriteProduct-header">
          <div class="favoriteProduct-title">
            <i class="fa-regular fa-heart header-content-heart"></i>
            <span>Sản phẩm yêu thích</span>
          </div>
          <i
            id="favoriteProduct-header-close"
            class="fa-solid fa-xmark favoriteProduct-header-close"
          ></i>
        </div>
        <div class="favoriteProduct-containter">
          <div class="favoriteProduct-info">
            <a href="#" class="favoriteProduct-img">
              <div class="favoriteProduct-img-first">
                <img src="../asset/images/product1.jpg" alt="" />
              </div>
              <div class="favoriteProduct-second-img">
                <img src="../asset/images/aothuntayngan1.jpg" alt="" />
              </div>
            </a>
            <div class="favoriteProduct-details">
              <a href="" class="favoriteProduct-link"
                >Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop</a
              >
              <div class="favoriteProduct-option">
                <div class="favoriteProduct-choose">
                  <div class="favoriteProduct-choose-color">
                    Màu sắc
                    <i class="fa-solid fa-angle-down"></i>
                    <div class="favoriteProduct-choose-color-list">
                      <span>
                        <img src="../asset/images/aothuntayngan1.jpg" alt="" />
                        BLACK
                      </span>
                      <span>
                        <img
                          src="../asset/images/aothuntaynganden.jpg"
                          alt=""
                        />
                        WHITE
                      </span>
                      <span>
                        <img src="../asset/images/aothuntaynganbe.jpg" alt="" />
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
                  <i
                    class="fa-solid fa-minus"
                    id="favoriteProduct-inc-minus"
                  ></i>
                  <input
                    type="number"
                    value="1"
                    id="favoriteProduct-inc-quantity"
                    class="favoriteProduct-inc-quantity"
                  />
                  <i class="fa-solid fa-plus" id="favoriteProduct-inc-plus"></i>
                </div>
                <span class="favoriteProduct-price"> 199.000 ₫</span>
                <div class="favoriteProduct-button">Thêm vào giỏ hàng</div>
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
          <i
            id="cart-header-close"
            class="fa-solid fa-xmark favoriteProduct-header-close"
          ></i>
        </div>
        <div class="favoriteProduct-containter">
          <div class="favoriteProduct-info">
            <a href="#" class="favoriteProduct-img">
              <div class="favoriteProduct-img-first">
                <img src="../asset/images/product1.jpg" alt="" />
              </div>
            </a>
            <div class="favoriteProduct-details">
              <a href="" class="favoriteProduct-link"
                >Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop</a
              >
              <div class="favoriteProduct-option">
                <div class="favoriteProduct-choose">
                  <div class="favoriteProduct-choose-color">
                    Màu sắc
                    <i class="fa-solid fa-angle-down"></i>
                    <div class="favoriteProduct-choose-color-list">
                      <span>
                        <img src="../asset/images/aothuntayngan1.jpg" alt="" />
                        BLACK
                      </span>
                      <span>
                        <img
                          src="../asset/images/aothuntaynganden.jpg"
                          alt=""
                        />
                        WHITE
                      </span>
                      <span>
                        <img src="../asset/images/aothuntaynganbe.jpg" alt="" />
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
                  <i
                    class="fa-solid fa-minus"
                    id="favoriteProduct-inc-minus"
                  ></i>
                  <input
                    type="number"
                    value="1"
                    id="favoriteProduct-inc-quantity"
                    class="favoriteProduct-inc-quantity"
                  />
                  <i class="fa-solid fa-plus" id="favoriteProduct-inc-plus"></i>
                </div>
                <span class="favoriteProduct-price"> 199.000 ₫</span>
                <div class="favoriteProduct-button">Thêm vào giỏ hàng</div>
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
    <!-- sign in -->
    <div id="my-modal" class="modal1">
      <div class="modal-content">
        <span class="sign-in-close">&times;</span>
        <h2 style="text-align: center">Đăng nhập</h2>
        <form>
          <div class="form-group">
            <label for="username">Tài khoản:</label>
            <input type="text" id="username" name="username" required />
          </div>

          <label for="password">Mật khẩu:</label>
          <input type="password" id="password3" name="password" required />
          <a href=""><span class="quenmk">Quên mật khẩu?</span></a>
          <br />
          <button type="submit" id="submit-btn" class="buttonregister">Đăng nhập</button>
          <br />
          <div class="dangky">
            <span>Bạn chưa có tài khoản?</span>
            <a href="/register.html">Đăng ký thành viên</a>
          </div>
        </form>
        <p id="message"></p>
      </div>
    </div>
    <!-- Nav -->
    <!-- end sign in -->

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
        <img src="../asset/images/menu.png" alt="" class="header-menu-bar" />
      </div>
      <div class="overlay"></div>
      <div class="header-logo">
        <a href="./index.html">
          <img
            src="../asset/images/routine_log.png"
            alt=""
            class="header-logo-img"
          />
        </a>
      </div>
      <!-- end -->
      <!-- second header -->
      <ul class="header-nav">
        <div class="header-second-logo">
          <a href="./index.html">
            <img
              src="../asset/images/routine_log.png"
              alt=""
              class="header-logo-img"
            />
          </a>
        </div>
        <li class="header-nav-item">
          <a class="header-nav-link" href="./male-fashion.html">NAM</a>
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
            <input
              type="text"
              name=""
              placeholder="Tìm kiếm"
              class="header-search-content"
            />
          </form>
        </div>
        <div class="header-content-tool">
          <div>
            <i class="fa-regular fa-user header-content-user"></i>
          </div>
          <div>
            <i
              id="header-content-heart"
              class="fa-regular fa-heart header-content-heart"
            ></i>
          </div>
          <div>
            <i
              class="fa-solid fa-heart header-content-heart"
              style="display: none"
            ></i>
          </div>
          <div id="header-content-cart">
            <i class="fa-solid fa-cart-shopping header-content-cart"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- End nav -->
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Trang chủ /</li>
        <li>Thời trang nam</li>
      </ul>

      <main id="main-content">
        <div class="main-banner">
          <img
            src="../../du_an1/asset/images/quan-ao-thoi-trang-nam.jpg"
            alt=""
            class="main-banner-img"
          />
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
          </div>
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
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
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
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
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
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
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
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Đen</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/black.png')"
                  ></div>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Trắng</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/white.png')"
                  ></div>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Be</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/be.png')"
                  ></div>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Xám bạc</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/xam_bac.png')"
                  ></div>
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
                    <span>₫</span
                    ><span id="start-value" class="filter-price-min"
                      >79000đ</span
                    >
                  </div>
                  <div>
                    <span>₫</span
                    ><span id="end-value" class="filter-price-max"
                      >1375000đ</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="product-colum">
            <div class="product-row row-col-4">
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product-newProduct">
                  <img src="../asset/images/newProduct.png" alt="" />
                </span>
                <span class="product-discount"> -2% </span>

                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/product1_con1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/product1_con1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/product1_con.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/product1_con.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product-discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product-discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_4__1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product-discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
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
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                alt=""
                class="product-image"
              />
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
                  <img
                    src="../asset/images/ao-so-mi-nam-10s23shs004_ballad_blue_1__1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </a>
            </div>
          </div>
          <!-- end item -->
        </div>
      </div>
    </div>
<?php require "./includes/footer.php"; ?>