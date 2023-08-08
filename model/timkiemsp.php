<?php
function timkiem($tukhoa){
    $sql = "SELECT *
    FROM products
    WHERE product_name LIKE '%$tukhoa%'
    GROUP BY product_code;";
    $a = pdo_query($sql);
    return $a;
}
?>  