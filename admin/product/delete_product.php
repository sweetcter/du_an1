<?php
require "../../global.php";
require "../../model/pdo.php";
require "../../model/product.php";

$product_id = $_GET['product_id'];
if(isset($product_id)){
    product_delete($product_id);
    header("location: ../index.php?act=view_product");
    setcookie('notification',"Xóa thành công", time() + 1, "/");
}else {
    header("location: ../index.php?act=view_product");
    setcookie('notification',"Xóa Thất bại", time() + 1, "/");
}
exit();
?>
