<?php
require "../../global.php";
require "../../model/pdo.php";
require "../../model/product.php";

$product_id = $_GET['product_id'];
<<<<<<< HEAD
if (isset($product_id)) {
    $color_id = handle_delete_color($product_id);
    
    $images_id = handle_delete_images($product_id);
    delete_color($color_id);
    for ($i = 0; $i < count($images_id); $i++) {
        $select_image_url = select_image_url($images_id[$i]);
        unlink('../..' . $select_image_url['image_url']);
        delete_images($images_id[$i]);
    }
    $size_id = handle_delete_size($product_id);
    delete_size($size_id);
    $product_result = select_product_by_id($product_id);
    
    unlink('../..' . $product_result['main_image_url']);
    unlink('../..' . $product_result['hover_main_image_url']);
    product_delete($product_id);

    header("location: ../index.php?act=view_product");
    setcookie('notification', "Xóa thành công", time() + 1, "/");
} else {
    // header("location: ../index.php?act=view_product");
    setcookie('notification', "Xóa Thất bại", time() + 1, "/");
=======
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
>>>>>>> dc656a23b9181536a7246f0e8bf92a1db63b18af
}
exit();
