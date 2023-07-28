<?php

function add_product($product_name, $product_price, $product_main_image, $product_hover_main_image, $quantity, $product_import_date, $product_discount, $product_description, $category_id)
{
    $sql = "INSERT INTO products(product_name,product_price,main_image_url,hover_main_image_url,quantity,product_import_date,discount,product_desc,category_id) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $product_name, $product_price, $product_main_image, $product_hover_main_image, $quantity, $product_import_date, $product_discount, $product_description, $category_id);
}

function add_images_product($images, $product_id)
{
    $sql = "INSERT INTO product_images(image,product_id) VALUES(?,?)";
    pdo_execute($sql, $images, $product_id);
}
function selectAll_product($sortDescending)
{
    $sql = "SELECT * FROM products ORDER BY product_id " . ($sortDescending ? "DESC" : "ASC");
    return pdo_query($sql);
}
function select_product_by_id($product_id)
{
    $sql = "SELECT * FROM products WHERE product_id = ? ";
    return pdo_query_one($sql, $product_id);
}
function product_delete($product_id)
{
    $sql = "DELETE FROM products WHERE id_product = ?";
    pdo_execute($sql, $product_id);
}
function product_update($product_name, $product_price, $product_main_image, $product_hover_main_image, $quantity, $product_discount, $product_description, $category_id, $product_id)
{
    $sql = "UPDATE products SET product_name = ?, product_price = ?,main_image_url = ?,hover_main_image_url = ?,quantity = ?,discount = ?,product_desc = ?,category_id = ? 
    WHERE product_id = ?";
    pdo_execute($sql,$product_name, $product_price, $product_main_image, $product_hover_main_image, $quantity, $product_discount, $product_description, $category_id, $product_id);
}
function select_all_product_by_category($product_id)
{
    $sql = "SELECT * FROM products WHERE id_product = ?";
    return pdo_query($sql, $product_id);
}
function paginate()
{
}
