<?php
require "../../global.php";
require "../../$MODEL_URL/product.php";
$banner_name = $_POST['banner_name'];
$image_name = $_POST['image_name'];

add_banner($banner_name,$banner_image);



