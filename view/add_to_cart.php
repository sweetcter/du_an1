<?php
$product_id = $_POST['productId'];
$colorNameId = $_POST['colorId'];
$sizeId = $_POST['sizeId'];
$quantity = $_POST['quantity'];
$addToCart = select_product_by_id($product_id);
$color_name = select_color_name_by_id($colorNameId);
$currentDateTime = date("Y-m-d");
$_SESSION['count_cart']++;
// session_start();


if (empty($_SESSION['cart'][$product_id])) {
    // foreach ($addToCart as $key => $value) {
    $_SESSION['cart'][$product_id]['product_name'] = $addToCart['product_name'];
    $_SESSION['cart'][$product_id]['product_price'] = $addToCart['product_price'];
    $_SESSION['cart'][$product_id]['main_image_url'] = $addToCart['main_image_url'];
    $_SESSION['cart'][$product_id]['second_image_url'] = $addToCart['hover_main_image_url'];
    $_SESSION['cart'][$product_id]['sizeId'] = (int)$sizeId;
    $_SESSION['cart'][$product_id]['colorNameId'] = $colorNameId;
    $_SESSION['cart'][$product_id]['product_price'] = $addToCart['product_price'];
    $_SESSION['cart'][$product_id]['discount'] = $addToCart['discount'];
    $_SESSION['cart'][$product_id]['date'] = $currentDateTime;
    $_SESSION['cart'][$product_id]['color_name'] = $color_name['color_name'];
    // if ($_SESSION['cart'][$product_id]['quantity'] += $quantity > $addToCart['quantity']) {
    //     $_SESSION['cart'][$product_id]['quantity'] = $addToCart['quantity'];
    // } else {
    $_SESSION['cart'][$product_id]['quantity'] = $quantity;
    // }
    // }
} else {
    // if ($_SESSION['cart'][$product_id]['quantity'] += $quantity > $addToCart['quantity']) {
    //     $_SESSION['cart'][$product_id]['quantity'] = $addToCart['quantity'];
    // } else {
        $check_quantity = $addToCart['quantity'];
    if ($_SESSION['cart'][$product_id]['quantity'] < $check_quantity - 1) {
        $_SESSION['cart'][$product_id]['quantity']++;
    }
    // }
}

// echo json_encode($_SESSION['cart'][$product_id]);
