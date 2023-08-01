<?php
require "../../global.php";
require "../..$MODEL_URL/pdo.php";
require "../..$MODEL_URL/product.php";

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_discount = $_POST['product_discount'];
$product_desc = $_POST['product_desc'];
$product_quantity = $_POST['product_quantity'];
$product_cat_id = $_POST['product_cat_id'];
$product_image = $_FILES['product_main_image'];
$product_second_image = $_FILES['product_hover_main_image'];
$product_old_main_img = $_POST['old_main_image'];
$product_old_second_image = $_POST['old_second_image'];
$tmp_image = $product_image['tmp_name'];
$tmp_second_image = $product_second_image['tmp_name'];
// $file_info = pathinfo($product_image['name']);
// $file_second_info = pathinfo($product_second_image['name']);

$save_main_img = "";
$save_second_img = "";

// $checkTail = ['png', 'jpg', 'webp', 'jfif', 'gif', 'jepg'];
// check main image
if ($product_image['size'] > 0) {
    $save_main_img = add_image($product_image,$tmp_image,$ASSET_URL);
    if(!$save_main_img){
        header("location: ../index.php?act=update_product");
        setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
    }
} else {
    $save_main_img = $product_old_main_img;
}
// check second image
if ($product_second_image['size'] > 0) {
    $save_second_img = add_image($product_second_image,$tmp_second_image,$ASSET_URL);
    if (!$save_second_img) {
        header("location: ../index.php?act=update_product");
        setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
    }
} else {
    $save_second_img = $product_old_second_image;
}

product_update($product_name, $product_price, $save_main_img, $save_second_img, $product_quantity, $product_discount, $product_desc, $product_cat_id, $product_id);
header("location: ../index.php?act=update_product&product_id=" . $product_id);
setcookie('notification', "Cập nhật thành công", time() + 1, "/");
