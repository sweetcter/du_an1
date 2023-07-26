<?php
require "../../global.php";
require "../../$MODEL_URL/product.php";
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_discount = $_POST['product_discount'];
$product_desc = $_POST['product_desc'];
$product_cat_id = $_POST['product_cat_id'];

add_product($product_name,$product_price,$product_discount,$product_desc,$product_cat_id);



