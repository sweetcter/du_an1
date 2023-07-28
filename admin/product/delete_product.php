<?php
$product_id = $_GET['product_id'];
if(isset($product_id)){
    product_delete($product_id);
    setcookie('notification',"Xóa thành công", time() + 1, "/");
}else {
    setcookie('notification',"Xóa Thất bại", time() + 1, "/");
}
header("location: ./index.php");
