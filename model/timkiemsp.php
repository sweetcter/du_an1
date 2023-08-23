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
?>  