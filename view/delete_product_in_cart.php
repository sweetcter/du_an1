<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$variantKey = isset($_POST['Idcz']) ? $_POST['Idcz'] : null;

if (!empty($variantKey)) {
    unset($_SESSION['cart'][$variantKey]);
    if ($_SESSION['count_cart'] > 0) {
        $_SESSION['count_cart']--;
    }
    if($_SESSION['count_cart'] < 1){
        unset($_SESSION['cart']);
    }
}
if(isset($_SESSION['count_cart'])){
    echo $_SESSION['count_cart'];
}else {
    echo 0;
}
