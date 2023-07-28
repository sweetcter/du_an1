<?php
require "../../global.php";
require "../..$MODEL_URL/pdo.php";
require "../..$MODEL_URL/product.php";

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_discount = $_POST['product_discount'];
$product_desc = $_POST['product_desc'];
$product_quantity = $_POST['product_quantity'];
$product_import_date = $_POST['import_date'];
$product_cat_id = $_POST['product_cat_id'];
$product_image = $_FILES['product_main_image'];
$product_second_image = $_FILES['product_hover_main_image'];
$tmp_image = $product_image['tmp_name'];
$tmp_second_image = $product_second_image['tmp_name'];
$file_info = pathinfo($product_image['name']);
$file_second_info = pathinfo($product_second_image['name']);
$checkTail = ['png', 'jpg', 'webp', 'jfif', 'gif', 'jepg'];

if (in_array($file_info['extension'], $checkTail)) {
    $folder_name = "../..$ASSET_URL/images/";
    $file_name = uniqid() . $product_image['name'];
    if (move_uploaded_file($tmp_image, $folder_name . $file_name)) {
        $folder_name = "$ASSET_URL/images/";
        $save_main_img = $folder_name . $file_name;
    };
} else {
    header("location: ../index.php?act=add_product");
    setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
}

if (in_array($file_second_info['extension'], $checkTail)) {
    $folder_name = "../..$ASSET_URL/images/";
    $file_name = uniqid() . $product_second_image['name'];
    if (move_uploaded_file($tmp_second_image, $folder_name . $file_name)) {
        $folder_name = "$ASSET_URL/images/";
        $save_second_img = $folder_name . $file_name;
    };
} else {
    header("location: ../index.php?act=add_product");
    setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
}
add_product($product_name, $product_price, $save_main_img, $save_second_img,$product_quantity ,$product_import_date,$product_discount, $product_desc, $product_cat_id);
header("location: ../index.php?act=add_product");
setcookie('notification', "Thêm thành công", time() + 1, "/");
