<?php require "./global.php" ?>
<?php require ".$MODEL_URL/pdo.php" ?>
<?php require ".$MODEL_URL/product.php"; ?>

<?php 
   $action = isset($_GET['action']) ? $_GET['action'] : 'index';

   switch ($action) {
     case 'index':
        header("location: .$VIEW_URL/index.php");
       break;
     case 'add':
       break;
     default:
        echo "Không có gì";
       break;
   }
?>