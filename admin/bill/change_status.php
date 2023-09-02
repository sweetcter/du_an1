<?php
if(isset($_POST['orderId'])){
    $order_id = $_POST['orderId'];
    $status_id = $_POST['orderStatus'];
    orders_update($status_id,$order_id);
    $status_result = select_status_by_id($status_id);
    echo json_encode($status_result);
}