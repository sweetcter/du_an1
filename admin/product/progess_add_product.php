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
$product_code = $_POST['product_code'];
$product_color_type = $_POST['product_color'];
$product_color_name = $_POST['product_color_name'];
$product_color_image = $_FILES['product_color_image'];
$product_detail_image = $_FILES['product_detail_image'];
// print_r($product_detail_image);
foreach($product_detail_image['name'] as $key => $image){
    $fileTMP = $product_color_image[$image];
    print_r($fileTMP);
   
}
die();
$tmp_image = $product_image['tmp_name'];
$tmp_second_image = $product_second_image['tmp_name'];

$save_main_img = add_image($product_image,$tmp_image,$ASSET_URL);
$save_second_img = add_image($product_second_image,$tmp_second_image,$ASSET_URL);

if(!$save_main_img){
    header("location: ../index.php?act=update_product");
    setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
}
if(!$save_second_img){
    header("location: ../index.php?act=update_product");
    setcookie('notification', "Không đúng định dạng ảnh", time() + 1, "/");
}
$product_id_result = add_product($product_name, $product_price, $save_main_img, $save_second_img,$product_quantity ,$product_import_date,$product_discount, $product_desc, $product_cat_id);
$color_id_result = add_color($product_color_type,$product_color_name,$product_color_image);
getProductColors($product_id_result,$color_id_result);

// header("location: ../index.php?act=add_product");
setcookie('notification', "Thêm thành công", time() + 1, "/");
