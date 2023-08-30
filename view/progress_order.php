<?php
$customerId = $_POST['customerId'];
$customerfirstAndLastName = $_POST['customerfirstAndLastName'];
$customerAddress = $_POST['customerAddress'];
$customerNumberPhone = $_POST['customerNumberPhone'];
$customerEmail = $_POST['customerEmail'];
$customerNote = $_POST['customerNote'];
$order_pending = 1;
$total_cart_discount_price = 0;

foreach ($_SESSION['cart'] as $each) {
    $price = $each['product_price'];
    $cart_discount_price = $price - ($price * $each['discount'] / 100);
    $total_cart_discount_price += $cart_discount_price * $each['quantity'];
}
if (empty($customerId)) {
    $customerId = null;
}
add_order($customerId, $customerfirstAndLastName, $customerAddress, $customerNumberPhone, $customerEmail, $customerNote, $order_pending, $total_cart_discount_price);
$max_order_id_result = 0;

if (empty($customerId)) {
    $max_order_id_result = select_max_order();
} else {
    $max_order_id_result = select_max_order_id($customerId);
}

foreach ($_SESSION['cart'] as $each) {
    $quantity = $each['quantity'];
    add_order_product($max_order_id_result, $each['product_id'], $quantity);
}

unset($_SESSION['cart']);
unset($_SESSION['count_cart']);

echo 1;
