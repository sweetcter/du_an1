<?php
require "../global.php";
require "..$MODEL_URL/pdo.php";
require "..$MODEL_URL/product.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'view_product';
switch ($action) {
    case 'index':
        echo "hello";
        break;
    case 'view_product':
        require ".$PRODUCT_URL/productList.php";
        break;
    case 'add_product':
        require ".$PRODUCT_URL/add_product.php";
        break;
    default:
        echo "Không có gì";
        echo "admin";
        break;
}
