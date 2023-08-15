<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
$product_id = isset($_POST['productId']) ? (int)$_POST['productId'] : null;

if (!empty($product_id)) {
    unset($_SESSION['cart'][$product_id]);
    $isCheck = false;
    if ($_SESSION['count_cart'] > 0 && !$isCheck) {
        $_SESSION['count_cart']--;
        $isCheck = true;
    }
}
echo json_encode($_SESSION['count_cart']);
