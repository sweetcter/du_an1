<style>
  .mySlides {
    display: none;
  }

  /* img {
      vertical-align: middle;
    } */
  /* Slideshow container */
  .slideshow-container {
    max-width: 100%;
    position: relative;
    margin: auto;
  }

  .to_dot {
    position: absolute;
    bottom: 5%;
    text-align: center;
    right: 48%;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 3s;
  }

  @keyframes fade {
    from {
      opacity: 0.8;
    }

    to {
      opacity: 1;
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px;
    }
  }
</style>

<div class="x font">
  <div class="showimg">
    <div class="slideshow-container">

      <!-- --------- Xử Li Banner--------- -->
      <?php
      $dsBanner = selectAll_banner();
      foreach ($dsBanner as $bn) {
        extract($bn);
        echo '<div class="mySlides fade">
                        <img  src=".' . $bn['banner_image'] . '" alt="" style="width: 100%">
        </div>';
      }
      ?>
      <div style="text-align: center" class="to_dot">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>



    <nav>
      <div class="div1">
        <div class="div1_1 div1_1_cart">
          <img src="../<?= $ROOTt_URL ?>/asset/images/bannerroww1.png" alt="" />
          <div class="xemngay">
            <button><a href="#">xem ngay</a></button>
          </div>
        </div>

        <div class="div1_1 div1_1_cart">
          <img src="../<?= $ROOTt_URL ?>/asset/images/bannerrow2.jpg" alt="" />
          <div class="xemngay">
            <button><a href="#">xem ngay</a></button>
          </div>
        </div>

        <div class="div1_1 div1_1_cart">
          <img src="../<?= $ROOTt_URL ?>/asset/images/bannerroww2.webp" alt="" />
          <div class="xemngay">
            <button><a href="#">xem ngay</a></button>
          </div>
        </div>
      </div>

      <div class="div1_2 div1_2_cart">
        <img src="../<?= $ROOTt_URL ?>/asset/images/banneryoutube.jpg" alt="" />
        <div class="div_youtube">
          <!-- <video controls autoplay src="https://youtu.be/L7qbjrmQ728" width="520px" height="293px"></video> -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/L7qbjrmQ728" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>


        <div class="div1_1 div1_1_cart">
          <img src="../<?= $ROOTt_URL ?>/asset/images/banner_dm2.png" alt="" />
          <div class="xemngay">
            <button><a href="#">xem ngay</a></button>
          </div>
        </div>
      </div>

      <div class="title_rowgird font_roboto">
        <h1>thời trang</h1>
      </div>

      <div class="row_girdx">
        <div class="col column font_roboto">
          <div class="column_img">
            <img src="../<?= $ROOTt_URL ?>/asset/images/tintuc1.jpg" style="width: 100%; height: 100%" alt="" />
          </div>
          <div class="column_info">
            <div class="column_button flexx font_roboto">
              <div class="button__1">
                <button>thành tựu</button>
              </div>
              <div class="button__1">
                <button>sự nghiệp</button>
              </div>
            </div>

            <div class="title_name">
              <span>Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                miếng</span>
            </div>

            <div class="column_time">
              <span>May 4,2028</span>
            </div>

            <div class="name font">
              <span>Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                miếng</span>
            </div>
          </div>
        </div>

        <div class="col column font_roboto">
          <div class="column_img">
            <img src="../<?= $ROOTt_URL ?>/asset/images/tintuc2.jpg" style="width: 100%; height: 100%" alt="" />
          </div>
          <div class="column_info">
            <div class="column_button flexx font_roboto">
              <div class="button__1">
                <button>thành tựu</button>
              </div>
              <div class="button__1">
                <button>sự nghiệp</button>
              </div>
            </div>

            <div class="title_name">
              <span>Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                miếng</span>
            </div>

            <div class="column_time">
              <span>May 4,2028</span>
            </div>

            <div class="name font">
              <span>Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                miếng</span>
            </div>
          </div>
        </div>

        <div class="col column font_roboto">
          <div class="column_img">
            <img src="../<?= $ROOTt_URL ?>/asset/images/tintuc3.jpg" style="width: 100%; height: 100%" alt="" />
          </div>
          <div class="column_info">
            <div class="column_button flexx font_roboto">
              <div class="button__1">
                <button>thành tựu</button>
              </div>
              <div class="button__1">
                <button>sự nghiệp</button>
              </div>
            </div>

            <div class="title_name">
              <span>Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                miếng</span>
            </div>

            <div class="column_time">
              <span>May 4,2028</span>
            </div>

            <div class="name font">
              <span>Tã/bỉm quần HUGGIES SKINCARE MEGA JUMBO size L 96+8
                miếng</span>
            </div>
          </div>
        </div>
      </div>
    </nav>



    <script>
      // phần showw ảnh phẩn sản phẩm
      // var dip= document.getElementsByClassName('dip');
      // console.log(dip);

      // const x=document.getElementsByClassName('dip');
      // const y=document.getElementById('dip_show');
      // console.log(x[0].src);
      // const z =y.src;

      //     x[0].onmouseover=function () {
      //         y.src=this.src;
      // }
      // x[0].onmouseout=function () {
      //     y.src=z;
      // }
      // function myd(e) {
      //     let v = e.getElementsByClassName('dip')[0];
      //     y.src=v.src;
      // }
      // let imgsrc ='';

      // function get(e){
      //     let img = e.querySelector('img');
      //     imgsrc = img.getAttribute('src');
      // console.log(imgsrc);
      // return imgsrc;
      // y.src = imgsrc;
      // }
      // var x = get(e);
      // console.log(imgsrc);

      // let defaultImageSrc = z;

      // function updateImageSrc(element) {
      //   let imgElement = element.querySelector('img');
      //   let imgSrc = imgElement.getAttribute('src');
      //   let dipShowImg = document.getElementById('dip_show');
      //   dipShowImg.src = imgSrc;
      // }

      // function resetImageSrc() {
      //   let dipShowImg = document.getElementById('dip_show');
      //   dipShowImg.src = defaultImageSrc;
      // }

      // phần slide show
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }

      function showMenubar() {
        document.onscroll = function() {
          const scollTop = window.scrollY || document.documentElement.scrollTop;
          const header = document.getElementsByClassName("header_row1");
          const header1 = document.getElementsByClassName("header1");
          // console.log(header);
          header[0].style.display = "";
          if (scollTop >= 300) {
            header[1].style.display = "none";
            header1[0].style.background = "#fff";
          } else {
            header[0].style.display = "none";
            header[1].style.display = "";
            header1[0].style.background = "";
          }
        };
      }
      showMenubar();
    </script>