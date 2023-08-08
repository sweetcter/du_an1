<?php
require "../../global.php";
require "../..$MODEL_URL/pdo.php";
require "../..$MODEL_URL/product.php";

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_discount = $_POST['product_discount'];
$product_desc = $_POST['product_desc'];
$product_quantity = $_POST['product_quantity'];
$product_cat_id = $_POST['product_cat_id'];
$product_image = $_FILES['product_main_image'];
$product_second_image = $_FILES['product_hover_main_image'];
$product_code = $_POST['product_code'];
$product_size = $_POST['product_size'];
$product_color_type = $_POST['color_type'];
$product_color_name = $_POST['product_color_name'];
$product_color_image = $_FILES['product_color_image'];
$product_color_tmp_name = $product_color_image['tmp_name'];
$product_detail_image = $_FILES['product_detail_image'];
// print_r($product_detail_image);
$tmp_image = $product_image['tmp_name'];
$tmp_second_image = $product_second_image['tmp_name'];

$save_main_img = add_image($product_image, $tmp_image, $ASSET_URL);
$save_second_img = add_image($product_second_image, $tmp_second_image, $ASSET_URL);

if (!$save_main_img) {
    header("location: ../index.php?act=update_product");
    setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
}
if (!$save_second_img) {
    header("location: ../index.php?act=update_product");
    setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
}
$product_id_result = add_product($product_name, $product_price, $save_main_img, $save_second_img, $product_quantity,$product_discount,$product_code, $product_desc, $product_cat_id);
$color_image_result = add_image($product_color_image,$product_color_tmp_name,$ASSET_URL);
$color_id_result = add_color_name($product_color_name, $color_image_result);
$size_id_result = add_product_size($product_id_result,$product_size);

$detail_image = restructureFilesArray($product_detail_image);
$detail_image_length = count($detail_image);

for ($i = 0; $i < $detail_image_length; $i++) {
    $save_detail_img = add_image($detail_image[$i], $detail_image[$i]['tmp_name'], $ASSET_URL);
    $detal_image_id = add_detail_image($save_detail_img);
    getProductImages($product_id_result, $detal_image_id, $product_color_type);
}
getProductColors($product_id_result,$product_color_type, $color_id_result);
// getProductSizes($product_id_result,$size_id_result);

header("location: ../index.php?act=add_product");
setcookie('notification', "Thêm thành công", time() + 1, "/");
