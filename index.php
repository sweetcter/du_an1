
<?php
require "./global.php";
require ".$MODEL_URL/pdo.php";
require ".$MODEL_URL/product.php";
require ".$MODEL_URL/taikhoan.php";

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
  case 'dangky':
    if (isset($_POST['register'])) {
      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      insert_taikhoan($full_name, $username, $password, $email);
      echo '<script>alert("Bạn đã đăng ký thành công")</script>';
    }
    include "./view/index.php";
    break;
  default:
    echo "Không có gì";
    break;
}
