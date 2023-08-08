<?php
$product_id = $_POST['productId'];
$colorId = $_POST['colorId'];
$sizeId = $_POST['sizeId'];
$quanity = $_POST['quanity'];
$addToCart = select_product_by_id($product_id);
$currentDateTime = date("Y-m-d");
// session_start();


if (!isset($_SESSION['cart'][$product_id])) {
    foreach ($addToCart as $key => $value) {
        $newQuantity = $_SESSION['cart'][$product_id]['quantity'] += $quanity;
        $_SESSION['cart'][$product_id]['product_name'] = $addToCart['product_name'];
        $_SESSION['cart'][$product_id]['product_price'] = $addToCart['product_price'];
        $_SESSION['cart'][$product_id]['main_image_url'] = $addToCart['main_image_url'];
        $_SESSION['cart'][$product_id]['second_image_url'] = $addToCart['hover_main_image_url'];
        $_SESSION['cart'][$product_id]['sizeId'] = $sizeId;
        $_SESSION['cart'][$product_id]['colorId'] = $colorId;
        $_SESSION['cart'][$product_id]['product_price'] = $addToCart['product_price'];
        $_SESSION['cart'][$product_id]['discount'] = $addToCart['discount'];
        $_SESSION['cart'][$product_id]['date'] = $currentDateTime;
        if ($newQuantity > $addToCart['quantity']) {
            $_SESSION['cart'][$product_id]['quantity'] = $addToCart['quantity'];
        } else {
            $_SESSION['cart'][$product_id]['quantity'] += $quanity;
        }
    }
} else {
    $newQuantity = $_SESSION['cart'][$product_id]['quantity'] += $quanity;
    if ($newQuantity > $addToCart['quantity']) {
        $_SESSION['cart'][$product_id]['quantity'] = $addToCart['quantity'];
    } else {
        $_SESSION['cart'][$product_id]['quantity'] += $quanity;
    }
}

// echo json_encode($_SESSION['cart'][$product_id]);
