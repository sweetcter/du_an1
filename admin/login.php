<?php
include "../model/pdo.php";
include "../model/taikhoan.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$checkuser = checkuser($username, $password);
// print_r($_SESSION['username']);
// session_unset();
if (!is_array($checkuser)) {
   $array = [
    [
    "status" => "error",
    "mess" => "Tài khoản hoặc mật khẩu không chính xác"
    ]
   ];
  echo json_encode($array);  
} else {
    $array = [
        [
        "status" => "suss",
        ]
       ];
    $_SESSION['username'] = $checkuser;
    echo json_encode($array); 
}
