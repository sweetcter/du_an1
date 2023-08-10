<!-- Start Cart -->
<div id="cart-modal" class="cart-modal">
    <div id="cart-modal-container" class="cart-modal-container">
        <div class="cart-header-title">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Giỏ hàng</span>
        </div>
        <a href="" id="reloadPage"></a>
        <div class="cart-header-second">
            <?php //unset($_SESSION['cart']);
            $count_cart = 0;
            $total_price = 0;
            $total_new_price = 0;
            //unset($_SESSION['count_cart']);
            ?>
            <span><?php echo $count_cart = !empty($_SESSION['count_cart']) ? $_SESSION['count_cart'] : 0 ?> sản phẩm</span>
            <i id="cart-header-close" class="fa-solid fa-xmark favoriteProduct-header-close"></i>
        </div>
        <div id="favoriteProduct-containter" class="favoriteProduct-containter">
            <?php if (!isset($_SESSION['cart'])) :  //var_dump($_SESSION['cart']);
            ?>
                <span style="text-align: center; font-weight: 600;display:<?= isset($_SESSION['cart']) ? "none" : "block"; ?>;padding:16px 0">
                    Bạn không có sản phẩm nào trong giỏ hàng của bạn.</span>
            <?php else : ?>
                <?php //var_dump($_SESSION['cart']); 
                ?>
                <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                    <?php $product_result = select_product_by_id($key); ?>
                    <div class="favoriteProduct-info">
                        <a href="" class="favoriteProduct-img">
                            <div class="favoriteProduct-img-first">
                                <img src="../<?= $ROOT_URL . $value['main_image_url'] ?>" alt="" />
                            </div>
                            <div class="favoriteProduct-second-img">
                                <img src="../<?= $ROOT_URL . $value['second_image_url'] ?>" alt="" />
                            </div>
                        </a>
                        <div class="favoriteProduct-details">
                            <a href="#" class="favoriteProduct-link"><?= $value['product_name'] ?></a>
                            <div class="favoriteProduct-option">
                                <div class="favoriteProduct-choose cart">
                                    <div class="favoriteProduct-choose-color c">
                                        MÀU:
                                        <span>
                                            <?= $value['color_name'] ?>
                                        </span>
                                    </div>
                                    <div class="favoriteProduct-choose-size">
                                        SIZE:
                                        <?php $get_size = select_size_by_id($key); ?>
                                        <span><?= $get_size['size_name'] ?></span>
                                    </div>
                                </div>
                                <div class="favoriteProduct-inc">
                                    <i class="fa-solid fa-minus cartModal-inc-minus" id="cartModal-inc-minus"></i>
                                    <input type="number" disabled value="<?= $value['quantity'] ?>" id="cartModal-inc-quantity" class="favoriteProduct-inc-quantity" />
                                    <i class="fa-solid fa-plus cartModal-inc-plus" id="cartModal-inc-plus"></i>
                                    <input type="hidden" value="<?= $product_result['quantity'] ?>" class="cart_product_quantity">
                                </div>
                                <?php
                                $locale = 'vi_VN';
                                $currency = $value['product_price'];
                                $total_currency = $value['product_price'] * $value['quantity'];
                                $discount = $currency - ($currency * $value['discount'] / 100);
                                $total_discount = $total_currency - ($total_currency * $value['discount'] / 100);
                                $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
                                $product_vn_price = $formatter->format($currency);
                                $discount_price = $formatter->format($discount);
                                $total_price += $total_currency;
                                $total_new_price += $total_discount;
                                ?>
                                <span class="favoriteProduct-price"><?= $discount_price ?></span>
                                <del class="favoriteProduct-price-old"><?= $product_vn_price ?></del>
                            </div>
                        </div>
                        <div class="favoriteProduct-close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
        <?php if (!empty($_SESSION['cart'])) : ?>
            <div class="product-cart-bottom">
                <div class="cart-total-price">
                    <span class="cart-total-price-title">Tổng tiền:</span>
                    <div class="cart-total-price">
                        <?php
                        $total_price = $formatter->format($total_price);
                        $total_new_price = $formatter->format($total_new_price);
                        ?>
                        <span class="cart-total-new-price"><?= $total_new_price ?></span>
                        <span class="cart-total-old-price"><?= $total_price ?></span>
                    </div>
                </div>
                <div class="pay-to-cart">
                    <button>Tiếp tục mua sắm</button>
                    <button class="btn-pay-to-cart">Thanh Toán</button>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>
</div>
<!-- End -->