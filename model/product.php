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
function selectAll_product($sortDescending){
    $sql = "SELECT * FROM products ORDER BY id_product " . ($sortDescending ? "DESC" : "ASC");
    return pdo_query($sql);
}
function hang_hoa_delete($product_id){
    $sql = "DELETE FROM products WHERE id_product = ?";
    pdo_execute($sql,$product_id);
}
function select_all_product_by_category($product_id)
{
    $sql = "SELECT * FROM products WHERE id_product = ?";
    return pdo_query($sql,$product_id);
}
function paginate(){
    
}
