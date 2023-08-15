<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$type = $_POST['type'];
$remainingAmount = $_POST['remainingAmount'];
$remainingAmount = (int)$remainingAmount;
$currentQuantity = $_POST['currentQuantity'];
$currentQuantity = (int) $currentQuantity;
if ($type == 'increase') {
    if ($currentQuantity < $remainingAmount) {
        $currentQuantity++;
    }
} else {
    if ($currentQuantity > 1) {
        $currentQuantity--;
    }
}
echo $currentQuantity;