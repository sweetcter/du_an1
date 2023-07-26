<?php
require "./global.php";
require ".$MODEL_URL/pdo.php";
require ".$MODEL_URL/product.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
switch ($action) {
  case 'index';
    require ".$VIEW_URL/main.php";
    break;
  case 'male-fashion':
    require ".$VIEW_URL/male-fashion.php";
    break;
  case 'female-fashion':
    require ".$VIEW_URL/female-fashion.php";
    break;
  case 'admin':
    // require ".$ADMIN_URL/index.php";
    break;
  default:
    echo "Không có gì";
    break;
}
