<?php
function add_order($customer_id, $receiver_name, $receiver_address, $receiver_number_phone, $receiver_email, $receiver_note, $status_id, $total_price)
{
    $sql = "INSERT INTO orders(customer_id, receiver_name, receiver_address, receiver_number_phone, receiver_email, receiver_note, status_id, total_price) 
    VALUES(?,?,?,?,?,?,?,?) ";
    pdo_execute($sql,$customer_id, $receiver_name, $receiver_address, $receiver_number_phone, $receiver_email, $receiver_note, $status_id, $total_price);
}
function select_max_order_id($customer_id){
    $sql = "SELECT MAX(order_id) FROM orders WHERE customer_id = ?";
    return pdo_query_value($sql,$customer_id);
}
function select_max_order(){
    $sql = "SELECT MAX(order_id) FROM orders";
    return pdo_query_value($sql);
}
function add_order_product($order_id,$product_id,$quantity){
    $sql = "INSERT INTO order_product(order_id,product_id,quantity) VALUES(?,?,?)";
    pdo_execute($sql,$order_id,$product_id,$quantity);
}