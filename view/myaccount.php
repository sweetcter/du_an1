  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700;800;900&family=Inter:wght@200;300;400;500;600&family=Montserrat:wght@300;400;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../du_an1/asset/slick-master/slick/slick.css"
    />
    
    <link rel="stylesheet" href="../../du_an1/asset//css/slick.css" />
    <link rel="stylesheet" href="../../du_an1/asset/css/base.css" />
    <link rel="stylesheet" href="../../du_an1/asset/css/grid.css" />
    <link rel="stylesheet" href="../../du_an1/asset/css/style.css" />
    <link rel="stylesheet" href="../../du_an1/asset/css/spct.css" />
    <link rel="stylesheet" href="../../du_an1/asset/css/user.css" />
    
    
    
</head>
<body>
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
            <li>ĐĂNG NHẬP</li>
            <li>ĐĂNG KÝ</li>
          </ul>
        </div>
        <!-- Hidden when scoll -->
        <div class="header-bar">
          <img src="../../du_an1/asset/images/menu.png" alt="" class="header-menu-bar" />
        </div>
        <div class="overlay"></div>
        <div class="header-logo">
          <a href="#">
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
            <a href="#">
              <img
                src="../asset/images/routine_log.png"
                alt=""
                class="header-logo-img"
              />
            </a>
          </div>
          <li class="header-nav-item">
            <a class="header-nav-link" href="#">NAM</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="#">NỮ</a>
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
                id=""
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
              <i class="fa-regular fa-heart header-content-heart"></i>
            </div>
            <div>
              <i
                class="fa-solid fa-heart header-content-heart"
                style="display: none"
              ></i>
            </div>
            <div>
              <i class="fa-solid fa-cart-shopping header-content-cart"></i>
            </div>
          </div>
        </div>
    </header>
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
        <?php if (isset($_SESSION['username']))
                extract($_SESSION['username']);
              
            ?>
            <div class="sidebar-main">
                <div class="title_taikhoan">
                    <i class="fa-regular fa-user header-content-user"></i>
                    <span>Tài khoản của bạn</span>
                </div>
                <div class="nav_items">
               
           
                  <div class="nav_title">
                    <strong><?php if(isset($_SESSION['username'])) echo $_SESSION['username']['full_name'] ?></strong>
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
                        <li class="nav_item"><a href="index.php?action=thoat">Đăng xuất</a></li>
                        
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
                                <strong><?php if(isset($_SESSION['username'])) echo $_SESSION['username']['email'] ?></strong>
                            </p>
                            <p>
                                <span>Phone:</span>
                                <strong><?php if(isset($_SESSION['username'])) echo $_SESSION['username']['phone'] ?></strong>
                            </p>
                            
                        </div>
                        <form action="index.php?action=myaccount" method="POST" id="profile-form" enctype="multipart/form-data" >
                        <div class="thkn">
                            <h3>Thông tin cá nhân</h3>
                            <div class="">
                              <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="col-lg-6">
                            <input type="hidden" name="image_user" value="<?= $image_user ?>">
                            <p>Avatar <span>*</span></p>
                                    <input type="file" id="Avata"  name="image_user" required>
                                    
                               </div>
                            
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Username <span>*</span></p>
                                    <input type="text"  name="username" id="username" value="<?= $username ?> " placeholder="username" required >
                                </div>
                               </div>
                              <div class="row-col-6">
                                  
                                  <div class="checkout__input"> 
                                      <p>Họ và tên <span>*</span></p>
                                      <input type="text" name="full_name" id="fullname" value="<?= $full_name ?>" placeholder="Họ và tên" required>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" name="email" id="email" value="<?= $email ?>" placeholder="Your email" required>
                                </div>
                               </div>
                              <div class="col-lg-6">
                                  <div class="checkout__input">
                                      <p>Số điện thoại <span>*</span></p>
                                      <input type="tel" name="phone" value="<?= $phone ?>" id="Number" required>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Địa chỉ <span>*</span></p>
                                    <input type="text" name="address" value="<?= $address ?>" id="address" required>
                                </div>
                               </div>
                               <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Password <span>*</span></p>
                                    <input type="password" name="password" id="password" value="<?= $password ?>" placeholder="Enter a password" required>
                                </div>
                               </div>
                            </div>
                            <style>
                              .thkn a {
                                text-decoration: none;
                                color: white;
 
                              }
                            </style>
                            <div class="submit">
                              <!-- <input type="hidden" name="id" value=""> -->
                            <input type="submit" name="thaydoi" id="updatetk" value="Lưu thay đổi" style="color: white;"  >
                            </div>
                             
                            
                            <!-- // if (isset($thongbao) && ($thongbao) != "") {
                            //     echo $thongbao;
                            // } -->
                            
                        </div>
                        
                        </form>
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
src="../../du_an1/asset/slick-master/slick/slick.min.js"
></script>
<script type="text/javascript" src="../asset/js/slick.js"></script>
<script src="../../du_an1/asset/js/main.js"></script>
