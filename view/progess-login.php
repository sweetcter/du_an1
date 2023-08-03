

<?php 
include "../model/pdo.php";
include "../model/taikhoan.php";
session_start();
ob_start();
 if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkuser = checkuser($username, $password);

    if (is_array($checkuser)) {
      $_SESSION['username'] = $checkuser;
      header('location:../index.php');
      echo '<script>alert("Đăng nhập thành công")</script>';
    } else {
      echo '<script>alert("Tài khoản hoặc mật khẩu không tồn tại")</script>';
    }
  }