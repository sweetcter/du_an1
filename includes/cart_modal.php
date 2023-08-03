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
                            <!-- <div class="favoriteProduct-button">Thêm vào giỏ hàng</div> -->
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
</div>
<!-- End -->