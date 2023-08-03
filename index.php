<?php
session_start();
ob_start();
require "./global.php";
require "./includes/home2.php";
require ".$MODEL_URL/pdo.php";
require ".$MODEL_URL/product.php";
require ".$MODEL_URL/banner.php";
require ".$MODEL_URL/taikhoan.php";
require ".$MODEL_URL/category.php";
require ".$MODEL_URL/comment.php";

// $listCategory=listCategory();
// function dd($data) {
//   echo '<pre>';
//   print_r($data);
//   echo '</pre>';
//   die;
// }

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// echo $action;
switch ($action) {
  case 'index';
    $dsBanner = selectAll_banner();
    require ".$VIEW_URL/main.php";
    break;
  case 'male-fashion':
    require ".$VIEW_URL/male-fashion.php";
    break;
  case 'product_detail':
    require ".$VIEW_URL/product_detail.php";
    break;
  case 'female-fashion':
    require ".$VIEW_URL/female-fashion.php";
    break;
  case 'admin':
    // header('admin/index.php');
    require "../<?= $ROOTt_URL?>/admin/index.php";
    break;
  case "admin/female-fashion";
    require ".$VIEW_URL/female-fashion.php";
    break;
  case 'dangky':
    if (isset($_POST['dangky'])) {
      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      insert_taikhoan($full_name, $username, $password, $email,$address,$phone);
      echo '<script>alert("Bạn đã đăng ký thành công")</script>';
    }
    require ".$VIEW_URL/main.php";
    break;

  case 'login':
    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $checkuser = checkuser($username, $password);
      if (is_array($checkuser)) {
        $_SESSION['username'] = $checkuser;

        echo '<script>alert("Đăng nhập thành công")</script>';
      } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không tồn tại")</script>';
      }
    }
    require ".$VIEW_URL/main.php";
    break;
  case 'quenmk':
    if (isset($_POST['btnsubmit'])) {
      $email  = $_POST['email'];
      $checkemail = checkemail($email);
      if (is_array($checkemail)) {
        echo "<script>
        alert('Mật khẩu của bạn là:"
        .$checkemail['password'].
        "');
        </script>";

      }else{
        echo '<script>alert("Email không khớp với email đã đăng ký!")</script>';
      }
    }
  
    require ".$VIEW_URL/main.php";
    break;
  case 'myaccount':
    if (isset($_POST['thaydoi']) && ($_POST['thaydoi'])) {
      $id = $_POST['id'];
      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      // $image_user = $_FILES['image_user']['name'];
      // $target_dir = ".$ASSET_URL/images/";
      // $target_file = $target_dir . basename($_FILES["image_user"]["name"]);

      // if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
      //   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      // } else {
      //   // echo "Sorry, there was an error uploading your file.";
      // }

      update_taikhoan_home($full_name, $username, $password, $email,$address, $phone, $id);
      $_SESSION['username'] = checkuser($username, $password);
      echo '<script>alert("Bạn đã cập nhật thông tin thành công")</script>';
      // header('location: index.php?act=myaccount');
      // include "./view/myaccount.php";
      // $thongbao = "Bạn đã cập nhật thông tin thành công";
    }
    $listtaikhoan = loadall_taikhoan();
    require ".$VIEW_URL/myaccount.php";
    break;

  case 'updatetk':

      if (isset($_POST['thaydoi']) && ($_POST['thaydoi'])) {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $full_name = $_POST['full_name'];    
        update_taikhoan_home($full_name, $username, $password, $email, $address, $phone, $image_user, $id);
        $_SESSION['username'] = checkuser($username, $password);
        echo '<script>alert("Bạn đã cập nhật thông tin thành công")</script>';
        // header('location: index.php?act=myaccount');
        // $thongbao = "Bạn đã cập nhật thông tin thành công";
      }
      require ".$VIEW_URL/myaccount.php";
      break;
  
  case 'diachi':
      if (isset($_POST['thaydoi']) && ($_POST['thaydoi'])) {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $image_user = $_FILES['image_user']['name'];
        $target_dir = ".$ASSET_URL";
        $target_file = $target_dir . basename($_FILES["image_user"]["name"]);
  
        if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          // echo "Sorry, there was an error uploading your file.";
        }
  
        update_taikhoan_home($full_name, $username, $password, $email, $address, $phone, $image_user, $id);
        $_SESSION['username'] = checkuser($username, $password);
        echo '<script>alert("Bạn đã cập nhật thông tin thành công")</script>';
        // header('location: index.php?act=myaccount');
        // include "./view/myaccount.php";
        // $thongbao = "Bạn đã cập nhật thông tin thành công";
      }
      $listtaikhoan = loadall_taikhoan();
      require ".$VIEW_URL/myaccount.php";
      break;

  case 'thoat':
    session_unset();
    header('Location: index.php');
    break;

  
  default:
      echo "Không có gì";
      break;
}
require "./includes/footer2.php";

