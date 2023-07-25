<?php require "./global.php" ?>
<?php require ".$MODEL_URL/pdo.php" ?>
<?php require ".$MODEL_URL/product.php"; ?>
<?php require ".$MODEL_URL/taikhoan.php";?>

<?php 
   $action = isset($_GET['action']) ? $_GET['action'] : 'index';
  
   switch ($action) {
     case 'index':
        header("location: .$VIEW_URL/index.php");
       break;
     case 'add':
       break;

       case 'dangky':
        if (isset($_POST['register'] )) {
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            insert_taikhoan($full_name, $username, $password, $email);
            echo '<script>alert("Bạn đã đăng ký thành công")</script>';
        }
        include "./view/index.php";
        break;
   }
?>