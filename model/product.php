<?php

function add_product($product_name, $product_price, $product_main_image, $product_hover_main_image, $product_discount, $gender, $product_code, $product_description, $category_id)
{
    $sql = "INSERT INTO products(product_name,product_price,main_image_url,hover_main_image_url,discount,gender,product_code,product_desc,category_id) VALUES(?,?,?,?,?,?,?,?,?)";
    return pdo_execute_return_lastInsertId($sql, $product_name, $product_price, $product_main_image, $product_hover_main_image, $product_discount, $gender, $product_code, $product_description, $category_id);
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
function select_product_color_by_id($product_id)
{
    $sql = "SELECT product_color.* FROM products JOIN product_color ON products.product_id = product_color.product_id 
    WHERE products.product_id = ?";
    return pdo_query($sql, $product_id);
}
function select_product_images_by_id($product_id)
{
    $sql = "SELECT product_images.* FROM products JOIN product_images ON products.product_id = product_images.product_id 
    WHERE products.product_id = ?";
    return pdo_query($sql, $product_id);
}
function select_images_by_id($product_id)
{
    $sql = "SELECT images.* FROM products JOIN product_images ON products.product_id = product_images.product_id 
    JOIN images ON product_images.image_id = images.image_id WHERE products.product_id = ?";
    return pdo_query($sql, $product_id);
}
function select_product_size_by_id($product_id)
{
    $sql = "SELECT product_size.* FROM products JOIN product_size ON products.product_id = product_size.product_id 
    WHERE products.product_id = ?";
    return pdo_query($sql, $product_id);
}
function select_all_size()
{
    $sql = "SELECT * FROM size ORDER BY size_id ";
    return pdo_query($sql);
}
function select_all_size_by_product_id($product_id)
{
    $sql = "SELECT size.* FROM product_size JOIN size ON product_size.size_id = size.size_id WHERE product_size.product_id = ?";
    return pdo_query($sql, $product_id);
}
function select_all_color()
{
    $sql = "SELECT * FROM color_type ORDER BY color_type_id ";
    return pdo_query($sql);
}
function select_product_color($product_code)
{
    $sql = "SELECT color_name.*,product_color.* FROM products JOIN product_color ON products.product_id = product_color.product_id 
        JOIN color_name ON product_color.color_name_id = color_name.color_name_id WHERE products.product_code = ?";
    return pdo_query($sql, $product_code);
}
function select_color_by_product_id($product_id)
{
    $sql = "SELECT color_name.* FROM products JOIN product_color ON products.product_id = product_color.product_id 
        JOIN color_name ON product_color.color_name_id = color_name.color_name_id WHERE products.product_id = ?";
    return pdo_query_one($sql, $product_id);
}
function select_color_by_id($product_id)
{
    $sql = "SELECT color_type.* FROM products JOIN product_color ON products.product_id = product_color.product_id 
     JOIN color_type ON product_color.color_type_id = color_type.color_type_id WHERE products.product_id = ?";
    return pdo_query_one($sql, $product_id);
}
function select_size_by_id($product_id)
{
    $sql = "SELECT size.* FROM products JOIN product_size ON products.product_id = product_size.product_id 
    JOIN size ON product_size.size_id = size.size_id WHERE products.product_id = ?";
    return pdo_query_one($sql, $product_id);
}
// 
// function select_color_name_by_id($color_name_id)
// {
//     $sql = "SELECT * FROM color_name WHERE color_name_id = ?";
//     return pdo_query_one($sql, $color_name_id);
// }


function select_home_product($sortDescending, $category_id)
{
    $sql = "SELECT * FROM products WHERE category_id = ? GROUP BY product_code ORDER BY product_id " . ($sortDescending ? "DESC" : "ASC") . " LIMIT 8";
    return pdo_query($sql, $category_id);
}
function count_home_product($category_id)
{
    $sql = "SELECT SUM(quantity) FROM products WHERE category_id = ?";
    return pdo_query_value($sql, $category_id);
}
function select_product_by_id($product_id)
{
    $sql = "SELECT * FROM products WHERE product_id = ? ";
    return pdo_query_one($sql, $product_id);
}
function product_delete($product_id)
{
    $sql = "DELETE FROM products WHERE product_id = ?";
    pdo_execute($sql, $product_id);
}

function product_update($product_name, $product_price, $product_main_image, $product_hover_main_image, $quantity, $product_discount, $product_import_date, $product_code, $product_description, $category_id, $product_id)
{
    $sql = "UPDATE products SET product_name = ?, product_price = ?,main_image_url = ?,hover_main_image_url = ?,quantity = ?,discount = ?,product_import_date = ?,product_code = ?,product_desc = ?,category_id = ? 
    WHERE product_id = ?";
    pdo_execute($sql, $product_name, $product_price, $product_main_image, $product_hover_main_image, $quantity, $product_discount, $product_import_date, $product_code, $product_description, $category_id, $product_id);
}
function select_all_product_by_category($product_id)
{
    $sql = "SELECT * FROM products WHERE product_id = ?";
    return pdo_query($sql, $product_id);
}
function add_image($product_image, $tmp_image, $folder_root)
{
    $checkTail = ['png', 'jpg', 'webp', 'jfif', 'gif', 'jepg'];
    $file_info = pathinfo($product_image['name']);
    $save_img = "";

    if (in_array($file_info['extension'], $checkTail)) {
        $folder_name = "../../$folder_root/images/";
        $file_name = uniqid() . $product_image['name'];
        if (move_uploaded_file($tmp_image, $folder_name . $file_name)) {
            $folder_name = "$folder_root/images/";
            $save_img = $folder_name . $file_name;
        };
        return $save_img;
    } else {
        return "";
    }
}
function add_image_js_version($product_image, $tmp_image, $folder_root)
{
    $checkTail = ['png', 'jpg', 'webp', 'jfif', 'gif', 'jepg'];
    $file_info = pathinfo($product_image['name']);
    $save_img = "";

    if (in_array($file_info['extension'], $checkTail)) {
        $folder_name = "../../du_an1/$folder_root/images/";
        $file_name = uniqid() . $product_image['name'];
        if (move_uploaded_file($tmp_image, $folder_name . $file_name)) {
            $folder_name = "$folder_root/images/";
            $save_img = $folder_name . $file_name;
        };
        return $save_img;
    } else {
        return "";
    }
}
function update_images($image_url, $image_id)
{
    $sql = "UPDATE images SET image_url = ? WHERE image_id = ?";
    pdo_execute($sql, $image_url, $image_id);
}
function select_image_url($image_id)
{
    $sql = "SELECT image_url FROM images WHERE image_id = ?";
    return pdo_query_one($sql, $image_id);
}
function delete_images($image_id)
{
    $sql = "DELETE FROM images WHERE image_id  = ?";
    pdo_execute($sql, $image_id);
}
function select_all_image($product_id)
{
    $sql = "SELECT images.* FROM products JOIN product_images ON products.product_id = product_images.product_id 
        JOIN images ON product_images.image_id = images.image_id WHERE products.product_id = ?";
    return pdo_query($sql, $product_id);
}
function add_color_name($color_name, $color_image, $color_type_id)
{
    $sql = "INSERT INTO color_name(color_name,color_image,color_type_id) VALUES(?,?,?)";
    return pdo_execute_return_lastInsertId($sql, $color_name, $color_image, $color_type_id);
}
function select_product_color_by_product_id($product_id)
{
    $sql = "SELECT * FROM product_color WHERE product_id = ?";
    return pdo_query_one($sql, $product_id);
}
function update_color_name($color_name, $color_image, $color_id)
{
    $sql = "UPDATE color_name SET color_name = ?,color_image = ? WHERE color_name_id = ?";
    pdo_execute($sql, $color_name, $color_image, $color_id);
}
function select_color_name_by_id($color_name_id)
{
    $sql = "SELECT * FROM color_name WHERE color_name_id = ?";
    return pdo_query_one($sql, $color_name_id);
}
function select_all_color_name_by_id($color_name_id)
{
    $sql = "SELECT * FROM color_name WHERE color_name_id = ?";
    return pdo_query($sql, $color_name_id);
}
function select_all_color_name_by_product_id($product_id)
{
    $sql = "SELECT color_name.* FROM products JOIN product_color ON products.product_id = product_color.product_id 
    JOIN color_name ON product_color.color_name_id = color_name.color_name_id  WHERE products.product_id = ?";
    return pdo_query($sql, $product_id);
}
function update_product_color($color_type_id, $product_id)
{
    $sql = "UPDATE product_color SET color_type_id = ? WHERE product_id = ?";
    pdo_execute($sql, $color_type_id, $product_id);
}
function delete_color($color_id)
{
    $sql = "DELETE FROM color_name WHERE color_name_id = ?";
    pdo_execute($sql, $color_id);
}
function delete_product_color($product_id)
{
    $sql = "DELETE FROM product_color WHERE product_id  = ?";
    pdo_execute($sql, $product_id);
}
function add_detail_image($image_url)
{
    $sql = "INSERT INTO images(image_url) VALUES(?)";
    return pdo_execute_return_lastInsertId($sql, $image_url);
}
function update_detail_image($image_url, $image_id)
{
    $sql = "UPDATE images SET image_url = ? WHERE image_id = ?";
    return pdo_execute_return_lastInsertId($sql, $image_url, $image_id);
}
function delete_product_images($product_id)
{
    $sql = "DELETE FROM product_images WHERE product_id = ?";
    pdo_execute($sql, $product_id);
}
function add_product_size($product_id, $size_id)
{
    $sql = "INSERT INTO product_size(product_id,size_id) VALUES(?,?)";
    return pdo_execute($sql, $product_id, $size_id);
}
function add_product_color($product_id, $color_name_id)
{
    $sql = "INSERT INTO product_color(product_id,color_name_id) VALUES(?,?)";
    pdo_execute($sql, $product_id, $color_name_id);
}
function add_quantities($product_id, $color_name_id, $size_id, $quantity)
{
    $sql = "INSERT INTO quantities(product_id,color_name_id,size_id,quantity) VALUES(?,?,?,?)";
    pdo_execute($sql, $product_id, $color_name_id, $size_id, $quantity);
}
function update_size($size_id, $product_id)
{
    $sql = "UPDATE product_size SET size_id= ? WHERE product_id = ?";
    pdo_execute($sql, $size_id, $product_id);
}
function delete_product_size($product_id)
{
    $sql = "DELETE FROM product_size WHERE product_id = ?";
    pdo_execute($sql, $product_id);
}
function delete_size($size_id)
{
    $sql = "DELETE FROM size WHERE size_id = ?";
    pdo_execute($sql, $size_id);
}
// function select_all_size_by_id($product_id)
// {
//     $sql = "SELECT size.* FROM products JOIN product_size ON products.product_id = product_size.product_id 
//         JOIN size ON product_size.size_id = size.size_id WHERE products.product_id = ?";
//     return pdo_query($sql, $product_id);
// }

function select_all_product_admin()
{   
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}
function select_quantity_by_size($size_id, $product_id)
{
    $sql = "SELECT products.* FROM products JOIN product_size ON products.product_id = product_size.product_id WHERE product_size.size_id = ? and product_size.product_id = ?";
    return pdo_query_one($sql, $size_id, $product_id);
}

function restructureFilesArray($files)
{
    $output = [];
    foreach ($files as $attrName => $valuesArray) {
        foreach ($valuesArray as $key => $value) {
            $output[$key][$attrName] = $value;
        }
    }
    return $output;
}
function check_product_exist($product_code)
{
    $sql = "SELECT COUNT(*) FROM products WHERE product_code = ?";
    return pdo_query_value($sql, $product_code);
}
// function phantrang_product(){
//     $sql = "SELECT product_id,COUNT(product_id) AS number FROM products";
//     return pdo_query($sql);
// }
// function phantrang_product($itemsPerPage) {
//     $totalProducts = pdo_query_value("SELECT COUNT(*) FROM products");
//     $totalPages = ceil($totalProducts / $itemsPerPage);

//     return $totalPages;
// }

function count_all_products()
{
    $sql = "SELECT COUNT(*) FROM products";
    return pdo_query_value($sql);
}

function selectAll_product_phantrang($category_id, $sortDescending, $start, $limit)
{
    $sql = "SELECT * FROM products WHERE category_id = ?  GROUP BY product_code ORDER BY product_id " . ($sortDescending ? "DESC" : "ASC") . " LIMIT $start, $limit";
    return pdo_query($sql, $category_id);
}
function check_color_name_exist($color_name)
{
    $sql = "SELECT COUNT(*) 
    FROM color_name 
    WHERE LOWER(color_name) = LOWER(?)";
    return pdo_query_value($sql, $color_name);
}
function select_color_name_by_name($color_name)
{
    $sql = "SELECT * FROM color_name WHERE color_name = ?";
    return pdo_query_one($sql, $color_name);
}

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}
function formatMoney($money)
{
    $locale = 'vi_VN';
    $currency = $money;
    $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
    return $formatter->format($currency);
}

function select_product_by_product_code($product_code){
    $sql = "SELECT * FROM products WHERE product_code = ?";
    return pdo_query_one($sql,$product_code);
}
function check_product_color_exist($color_name_id){
    $sql = "SELECT COUNT(*) FROM product_color WHERE color_name_id = ?";
    return pdo_query_value($sql, $color_name_id);
}
function check_product_size_exist($size_id){
    $sql = "SELECT COUNT(*) FROM product_size WHERE size_id = ?";
    return pdo_query_value($sql, $size_id);
}
function select_all_color_name(){
    $sql = "SELECT * FROM color_name";
    return pdo_query($sql);
}
function select_one_color_name_by_color_name_id($color_name_id){
    $sql = "SELECT * FROM color_name WHERE color_name_id = ?";
    return pdo_query_one($sql,$color_name_id);
}
function select_product_size_by_product_id($product_id){
    $sql = "SELECT * FROM product_size WHERE product_id = ?";
    return pdo_query($sql,$product_id);
}
function select_quantities_by_product_id($product_id){
    $sql = "SELECT * FROM quantities WHERE product_id = ?";
    return pdo_query($sql,$product_id);
}
function select_color_type_by_id($size_id){
    $sql = "SELECT * FROM size WHERE size_id = ?";
    return pdo_query_one($sql,$size_id);
}
function select_one_color_type_by_id($color_type_id){
    $sql = "SELECT * FROM color_type WHERE color_type_id = ?";
    return pdo_query_one($sql,$color_type_id);
}
function select_one_size_by_size_id($size_id){
    $sql = "SELECT * FROM size WHERE size_id = ?";
    return pdo_query_one($sql,$size_id);
}





