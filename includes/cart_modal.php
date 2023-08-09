<!-- Start Cart -->
<div id="cart-modal" class="cart-modal">
    <div id="cart-modal-container" class="cart-modal-container">
        <div class="cart-header-title">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Giỏ hàng</span>
        </div>
        <div class="cart-header-second">
            <span>0 sản phẩm</span>
            <i id="cart-header-close" class="fa-solid fa-xmark favoriteProduct-header-close"></i>
        </div>
        <div id="favoriteProduct-containter" class="favoriteProduct-containter">
            <?php //unset($_SESSION['cart']); ?>
            <?php if (!isset($_SESSION['cart'])) :  //var_dump($_SESSION['cart']);
            ?>
                <span style="text-align: center; font-weight: 600;display:<?= isset($_SESSION['cart']) ? "none" : "block"; ?>;padding:16px 0">Bạn không có sản phẩm nào trong giỏ hàng của bạn.</span>
            <?php else : ?>
                <?php //var_dump($_SESSION['cart']); ?>
                <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                    <div class="favoriteProduct-info">
                        <a href="#" class="favoriteProduct-img">
                            <div class="favoriteProduct-img-first">
                                <img src="../<?= $ROOT_URL . $value['main_image_url'] ?>" alt="" />
                            </div>
                            <div class="favoriteProduct-second-img">
                                <img src="../<?= $ROOT_URL . $value['second_image_url'] ?>" alt="" />
                            </div>
                        </a>
                        <div class="favoriteProduct-details">
                            <a href="" class="favoriteProduct-link"><?= $value['product_name'] ?></a>
                            <div class="favoriteProduct-option">
                                <div class="favoriteProduct-choose">
                                    <div class="favoriteProduct-choose-color">
                                        Màu sắc
                                        <?php $color_result = select_color_name_by_id(2); ?>
                                        <span>
                                            <?= $color_result['color_name'] ?>
                                        </span>
                                    </div>
                                    <div class="favoriteProduct-choose-size">
                                        SIZE:
                                        <?php $get_size = select_size_by_id($key); ?>
                                        <span><?= $get_size['size_name'] ?></span>
                                    </div>
                                </div>
                                <div class="favoriteProduct-inc">
                                    <i class="fa-solid fa-minus" id="cartModal-inc-minus"></i>
                                    <input type="number" disabled value="<?= $value['quantity'] ?>" id="cartModal-inc-quantity" class="favoriteProduct-inc-quantity" />
                                    <i class="fa-solid fa-plus" id="cartModal-inc-plus"></i>
                                </div>
                                <span class="favoriteProduct-price"><?= $value['product_price'] ?>₫</span>
                            </div>
                        </div>
                        <div class="favoriteProduct-close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</div>
</div>
<!-- End -->