<!-- <?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
$product_id = $_POST['productId'];
$colorNameId = $_POST['colorId'];
$sizeId = $_POST['sizeId'];
$quantity = $_POST['quantity'];
$addToCart = select_product_by_id($product_id);
$color_name = select_color_name_by_id($colorNameId);
$size_name = select_size_by_id($product_id);
$currentDateTime = date("Y-m-d");
$total_cart_discount_price = 0;

if (empty($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]['product_id'] = (int)$product_id;
    $_SESSION['cart'][$product_id]['product_name'] = $addToCart['product_name'];
    $_SESSION['cart'][$product_id]['main_image_url'] = $addToCart['main_image_url'];
    $_SESSION['cart'][$product_id]['second_image_url'] = $addToCart['hover_main_image_url'];
    $_SESSION['cart'][$product_id]['sizeId'] = (int)$sizeId;
    $_SESSION['cart'][$product_id]['colorNameId'] = $colorNameId;
    $_SESSION['cart'][$product_id]['product_price'] = (int)$addToCart['product_price'];
    $_SESSION['cart'][$product_id]['discount'] = $addToCart['discount'];
    $_SESSION['cart'][$product_id]['date'] = $currentDateTime;
    $_SESSION['cart'][$product_id]['color_name'] = $color_name['color_name'];
    $_SESSION['cart'][$product_id]['size_name'] = $size_name['size_name'];
    $_SESSION['cart'][$product_id]['quantity'] = (int)$quantity;
    $_SESSION['count_cart']++;
    $_SESSION['cart'][$product_id]['remainingAmount'] = $addToCart['quantity'];
} else {
    $_SESSION['cart'][$product_id]['remainingAmount'] = $addToCart['quantity'];
    $check_quantity = $addToCart['quantity'];
    if ($_SESSION['cart'][$product_id]['quantity'] < $check_quantity - 1) {
        $_SESSION['cart'][$product_id]['quantity']++;
    }
}



