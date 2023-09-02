<?php
$receiver_email = $_SESSION['anonymous_customer']['receiver_email'];
$receiver_number_phone = $_SESSION['anonymous_customer']['receiver_number_phone'];
$order_result = select_all_order_product_by_email_and_phone_number($receiver_email, $receiver_number_phone);
?>
<?php foreach ($order_result as $key => $value) : ?>
    <?php $color_result = select_color_name_by_id($value['color_name_id']); ?>
    <div class="favoriteProduct-info order">
        <a href="/du_an1/product_detail&product_id=<?= $value['product_id'] ?>" class="favoriteProduct-img">
            <div class="favoriteProduct-img-first" style="width: 104px;">
                <img src="..<?= $ROOT_URL . $color_result['color_image'] ?>" alt="" />
            </div>
        </a>
        <div class="favoriteProduct-details" style="width: 100%;">
            <a href="/du_an1/product_detail&product_id=<?= $value['product_id'] ?>" class="favoriteProduct-link"><?= $value['product_name'] ?></a>
            <div class="favoriteProduct-option">
                <div class="favoriteProduct-choose">
                    <div class="favoriteProduct-choose-color cart">
                        MÀU:
                        <span>
                            <?= $color_result['color_name'] ?>
                        </span>
                    </div>
                    <div class="favoriteProduct-choose-size">
                        SIZE:
                        <?php $get_size = select_size_by_id($value['size_id']); ?>
                        <span><?= $get_size['size_name'] ?></span>
                    </div>
                </div>
                <div class="order_detail_quantity">
                    <span style="margin-right:4px">Số lượng</span>
                    <strong><?= $value['quantity'] ?></strong>
                </div>
            </div>
            <a href="/du_an1/product_detail&product_id=<?= $value['product_id'] ?>" class="btn_view_product">
                <button type="button" class="view_product">Xem Sản Phẩm</button>
            </a>
        </div>
    </div>
<?php endforeach ?>
<div class="bill_info">
    <h3>THÔNG TIN ĐƠN HÀNG</h3>
    <?php $total_quantity = 0;
    $status_id = 0;
    ?>
    <div class="bill_container">
        <?php $order_result_by_id = select_orders_by_email_and_phone_number($receiver_email, $receiver_number_phone)  ?>
        <?php foreach ($order_result_by_id as $key => $value) : ?>
            <?php $quantity_result = select_quantity_order_product($value['order_id']);
            ?>
            <div class="bill_container_detail">
                <?php //$total_quantity += $value['quantity'];
                $status_id = $value['status_id'];
                ?>
                <span class="receiver_name"> Người Nhận: <?= $value['receiver_name']; ?></span>
                <span class="receiver_address">Địa chỉ: <?= $value['receiver_address']; ?></span>
                <span class="product_total__quantity">Tổng số lượng: <span><?= $quantity_result ?></span></span>
                <div class="bill_status_and_total_price">
                    <span class="product_total__price">Tổng tiền: <strong><?= formatMoney($value['total_price']); ?></strong></span>
                    <div class="bill_status">
                        <?php $status_result = select_status_by_id($status_id); ?>
                        Trạng thái:
                        <span class="status_name" status="<?= $status_id ?>"> <?= $status_result['status'] ?></span>
                    </div>
                </div>
                <button type="button" style="display:<?= $status_id == 1 ? "block" : "none"; ?>" class="cancel_order">Hủy đơn hàng</button>
            </div>
        <?php endforeach ?>
    </div>
</div>