<?php
require "../../global.php";
require "../../model/pdo.php";
require "../../model/product.php";

$product_id = $_GET['product_id'];
if(isset($product_id)){
    // $color_id = handle_delete_color($product_id);
    // delete_color($color_id);

    // $images_id = handle_delete_images($product_id);
    //  for($i = 0;$i < count($images_id);$i++){
    //     delete_images($images_id[$i]);
    //     // echo $images_id[$i] . " ";
    // }

    // $size_id = handle_delete_size($product_id);
    // delete_size($size_id);
    // product_delete($product_id);

    // header("location: ../index.php?act=view_product");
    setcookie('notification',"Xóa thành công", time() + 1, "/");
}else {
    // header("location: ../index.php?act=view_product");
    setcookie('notification',"Xóa Thất bại", time() + 1, "/");
}
exit();
