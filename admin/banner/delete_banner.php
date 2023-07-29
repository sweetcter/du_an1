<?php
$banner_id = $_GET['banner_id'];
if(isset($banner_id)){
    delete_banner($banner_id);
    setcookie('notification',"Xóa thành công", time() + 1, "/");
}else {
    setcookie('notification',"Xóa Thất bại", time() + 1, "/");
}
header("location: ./index.php");
