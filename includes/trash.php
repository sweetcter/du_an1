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