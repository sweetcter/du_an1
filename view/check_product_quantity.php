<?php
$size_id = $_POST['sizeId'];
$product_id = $_POST['productId'];
$product_quantity = select_quantity_by_size($size_id,$product_id);

// var_dump($product_quantity);
echo $product_quantity['quantity'];
