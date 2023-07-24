<?php
include "./global.php";

function add_product($product_name, $product_price, $product_discount, $product_quantity, $product_description, $category_id)
{
    $sql = "INSERT INTO products(name_product,price,discount,quantity,dess,love,id_category) 
    VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql,$product_name,$product_price,$product_discount,$product_quantity,$product_description,$category_id);
}
function add_images_product($images, $product_id)
{
    
}
