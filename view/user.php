<?php require "./includes/header-cart.php" ?>
<?php require "./includes/header_nav.php" ?>

<?php require "./includes/register_modal.php" ?>

<?php require "./includes/favorite_product.php" ?>

<?php require "./includes/cart_modal.php" ?>

<?php require "./includes/login_modal.php" ?>

    <div class="wrapper">
        <main id="main-content">
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
            
                </div>
              </div>
  
            
        </div>
    </div>
    <div class="container">
      
        <div class="colums row-col-2">
            <div class="sidebar-main">
                <div class="title_taikhoan">
                    <i class="fa-regular fa-user header-content-user"></i>
                    <span>Tài khoản của bạn</span>
                </div>
                <div class="nav_items">
                  <div class="nav_title">
                    <strong>cuong nguyen</strong>
                    <span>NEW</span>
                  </div>
                  <hr>
                    <ul><br>
                        <li class="nav_item"><a href="">Thông tin tài khoản</a></li><br>
                        <li class="nav_item"><a href="">Địa chỉ giao hàng</a></li><br>
                        <li class="nav_item"><a href="">Lịch sử mua hàng</a></li><br>
                        <li class="nav_item"><a href="">Sản phẩm yêu thích</a></li><br>
                        <br>    
                        <hr>
                        <br>
                        <li class="nav_item"><a href="">Đăng xuất</a></li>
                    </ul>
                </div>   
            </div>
    
            <div class="colums_main">
                  <div class="page-title">
                    <h2>Thông tin tài khoản</h2>
                    <span>Bạn có thể cập nhật thông tin của mình ở trang này</span>
                  </div>
                  <hr>
                  <div class="account-information row-col-2">
                        <div class="info">
                            <h3>Thông tin đăng nhập</h3>
                            <p>
                                <span>Email:</span>
                                <strong>cuongb4102003@gmail.com</strong>
                            </p>
                            <p>
                                <span>Số điện thoại:</span>
                                <strong>0966 981 411</strong>
                            </p>
                        </div>
                        <div class="thkn">
                            <h3>Thông tin cá nhân</h3>
                            <div class="">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Username <span>*</span></p>
                                    <input type="text">
                                </div>
                               </div>
                              <div class="row-col-2">
                                  <div class="checkout__input">
                                      <p>Họ <span>*</span></p>
                                      <input type="text" >
                                  </div>
                                  <div class="checkout__input">
                                      <p>Tên <span>*</span></p>
                                      <input type="text" class="input_w">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text">
                                </div>
                               </div>
                              <div class="col-lg-6">
                                  <div class="checkout__input">
                                      <p>Số điện thoại <span>*</span></p>
                                      <input type="text" >
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Địa chỉ <span>*</span></p>
                                    <input type="text">
                                </div>
                               </div>
                               <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Password <span>*</span></p>
                                    <input type="password">
                                </div>
                               </div>
                            </div>
                            <style>
                              .thkn a {
                                text-decoration: none;
                                color: white;
 
                              }
                            </style>
                            <button><a href="">CẬP NHẬP THÔNG TIN </a></button>
                        </div>
                  </div>
            </div>
          
        </div>
    </div>
</body>
</html>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>

<!-- -----js img--------- -->

<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img")

    SmallImg[0].onclick = function () 
    {
        ProductImg.src = SmallImg[0].src;
    }

    SmallImg[1].onclick = function () 
    {
        ProductImg.src = SmallImg[1].src;
    }

    SmallImg[2].onclick = function () 
    {
        ProductImg.src = SmallImg[2].src;
    }

    SmallImg[3].onclick = function () 
    {
        ProductImg.src = SmallImg[3].src;
    }

</script>
<script
type="text/javascript"
src="//code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
type="text/javascript"
src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
type="text/javascript"
src="../asset/slick-master/slick/slick.min.js"
></script>
<script type="text/javascript" src="../asset/js/slick.js"></script>
<script src="../asset/js/main.js"></script>
