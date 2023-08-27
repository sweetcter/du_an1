<?php
function timkiem($tukhoa){
    $sql = "SELECT *
    FROM products
    WHERE product_name LIKE '%$tukhoa%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function ao_nam(){
    $sql = "SELECT *
    FROM products
    WHERE product_name like '%ao % nam%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function quan_nam(){
    $sql = "SELECT *
    FROM products
    WHERE product_name like '%quan % nam%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function ao_so_mi(){
    $sql = "SELECT *
    FROM products
    WHERE product_name like '%ao so mi nam%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function ao_thun(){
    $sql = "SELECT *
    FROM products
    WHERE product_name LIKE '%ao thun nam%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function ao_hoodie(){
    $sql = "SELECT *
    FROM products
    WHERE product_name LIKE '%hoodie%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function ao_polo(){
    $sql = "SELECT *
    FROM products
    WHERE product_name LIKE '%polo nam%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;  
}
function quan_nu(){
    $sql = "SELECT *
    FROM products
    WHERE product_name like '%quan % nu%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function ao_nu(){
    $sql = "SELECT *
    FROM products
    WHERE product_name like '%ao % nu%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function vay_nu(){
    $sql = "SELECT *
    FROM products
    WHERE product_name like '%vay % nu%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
function price_bo_loc($min,$max){
    $sql = "SELECT *
    FROM products
    WHERE product_price >= ? AND product_price <= ?
    ORDER BY product_id DESC";
    return pdo_query($sql,$min,$max);
}
function filterProductsBySize($size) {
    $sql = "SELECT * FROM products p 
            JOIN product_size ps ON p.product_id = ps.product_id
            JOIN size s ON ps.size_id = s.size_id
            WHERE s.size_id = ?";
    return pdo_query($sql, $size);
}
function getProductsByColor($color_id) {
    $sql = "SELECT products.* FROM products 
    JOIN product_color ON products.product_id = product_color.product_id 
    JOIN color_name ON product_color.color_name_id = color_name.color_name_id
    WHERE color_name.color_type_id = ?";
    return pdo_query($sql, $color_id);
}