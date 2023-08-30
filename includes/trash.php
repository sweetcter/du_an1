$("#product-cart-bottom-container").html(cartTotalInfo);
let cartTotalInfo = `
<!-- <div class="product-cart-bottom">
        <div class="cart-total-price">
            <span class="cart-total-price-title">Tổng tiền:</span>
            <div class="cart-total-price">
                <span id="cart-total-new-price" class="cart-total-new-price"></span>
                <span id="cart-total-old-price" class="cart-total-old-price"></span>
            </div>
        </div>
        <div class="pay-to-cart">
            <button>Tiếp tục mua sắm</button>
            <button class="btn-pay-to-cart">Thanh Toán</button>
        </div></div>`; -->
<div class="slider-for main-image-slider">
    <?php foreach ($image_result as $key => $value) : ?>
        <img src="../..<?= $ROOT_URL . $value['image_url'] ?>" alt="">
    <?php endforeach ?>
</div>
<div class="slider-nav second-image-slider">
    <?php foreach ($image_result as $key => $value) : ?>
        <img src="../..<?= $ROOT_URL .  $value['image_url'] ?>" alt="">
    <?php endforeach ?>
</div>

<!-- Rác ngày 8/29/2023 -->
<?php if (!isset($_SESSION['cart'])) : ?>
                <span style="text-align: center; font-weight: 600;display:block">Bạn không có sản phẩm nào trong giỏ hàng của bạn. </span>
            <?php else : ?>
                <?php var_dump($_SESSION['cart']);
                //var_dump($_SESSION['count_cart']);
                ?>
                <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                    <?php $quantity_result = select_quantity_by_product_id_color_name_id_and_size_id($value['sizeId'],$value['colorNameId'],$value['product_id']); ?>
                    <div class="favoriteProduct-info">
                        <a href="" class="favoriteProduct-img">
                            <div class="favoriteProduct-img-first">
                                <img src="..<?= $ROOT_URL . $value['main_image_url'] ?>" alt="" />
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
                                        <?php $get_size = select_size_by_id($value['sizeId']); ?>
                                        <span><?= $get_size['size_name'] ?></span>
                                    </div>
                                </div>
                                <div class="favoriteProduct-inc">
                                    <span id="cart_product_id" product_id="<?= $key ?>"></span>
                                    <i class="fa-solid fa-minus cartModal-inc-minus" id="cartModal-inc-minus"></i>
                                    <input type="number" disabled value="<?= $value['quantity'] ?>" class="favoriteProduct-inc-quantity" product-cart="<?= $value['product_id'] ?>" />
                                    <i class="fa-solid fa-plus cartModal-inc-plus" id="cartModal-inc-plus"></i>
                                    <input type="hidden" value="<?= $quantity_result['quantity'] ?>" class="cart_product_quantity">
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
                        <div class="delete-from-cart favoriteProduct-close" product_id="<?= $key ?>">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
                