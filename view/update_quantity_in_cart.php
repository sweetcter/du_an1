<?php
$type = $_POST['type'];
$product_id = !empty($_POST['productId'])?$_POST['productId']:null;
$quantity_value = $_POST['quantityValue'];
$quantity_value = (int)$quantity_value;
$containQuantity = $_POST['containQuantity'];
$containQuantity = (int) $containQuantity;
if ($type == 'increase') {
    if ($quantity_value < $containQuantity) {
        $quantity_value++;
        if(isset($product_id)){
            $_SESSION['cart'][$product_id]['quantity']++;
        }
    }
} else {
    if ($quantity_value > 1) {
        $quantity_value--;
        if(isset($product_id)){
            $_SESSION['cart'][$product_id]['quantity']--;
        }
    }
}
echo $quantity_value;
