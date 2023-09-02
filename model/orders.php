<?php
function add_order($customer_id, $receiver_name, $receiver_address, $receiver_number_phone, $receiver_email, $receiver_note, $status_id, $pay_methods, $total_price, $delivery_charges)
{
    $sql = "INSERT INTO orders(customer_id, receiver_name, receiver_address, receiver_number_phone, receiver_email, receiver_note, status_id,pay_methods ,total_price,delivery_charges) 
    VALUES(?,?,?,?,?,?,?,?,?,?) ";
    pdo_execute($sql, $customer_id, $receiver_name, $receiver_address, $receiver_number_phone, $receiver_email, $receiver_note, $status_id, $pay_methods, $total_price, $delivery_charges);
}
function select_max_order_id($customer_id)
{
    $sql = "SELECT MAX(order_id) FROM orders WHERE customer_id = ?";
    return pdo_query_value($sql, $customer_id);
}
function select_max_order()
{
    $sql = "SELECT MAX(order_id) FROM orders";
    return pdo_query_value($sql);
}
// function select_info_max_orders()
// {
//     $sql = "SELECT * FROM orders WHERE email";
//     return pdo_query_value($sql);
// }
function add_order_product($order_id, $product_id, $size_id, $color_name_id, $quantity)
{
    $sql = "INSERT INTO order_product(order_id,product_id,size_id,color_name_id,quantity) VALUES(?,?,?,?,?)";
    pdo_execute($sql, $order_id, $product_id, $size_id, $color_name_id, $quantity);
}
function select_all_orders()
{
    $sql = "SELECT orders.* FROM orders";
    return pdo_query($sql);
}
function select_all_order_product_admin_by_id($order_id)
{
    $sql = "SELECT orders.*,order_product.*,products.* FROM orders 
    JOIN order_product ON orders.order_id = order_product.order_id 
    JOIN products ON products.product_id = order_product.product_id 
    WHERE orders.order_id = ?";
    return pdo_query($sql, $order_id);
}
function select_status_by_id($status_id)
{
    $sql = "SELECT * FROM status WHERE status_id = ?";
    return pdo_query_one($sql, $status_id);
}
function select_all_status(){
    $sql = "SELECT * FROM status";
    return pdo_query($sql);
}
function select_order_product_by_id($order_id)
{
    $sql = "SELECT * FROM order_product WHERE order_id = ?";
    return pdo_query_one($sql, $order_id);
}
function select_order_by_id($order_id)
{
    $sql = "SELECT * FROM orders WHERE order_id = ?";
    return pdo_query_one($sql, $order_id);
}
function orders_update($status_id,$order_id){
    $sql = "UPDATE orders SET status_id = ? WHERE order_id = ?";
    pdo_execute($sql,$status_id,$order_id);
}
function select_all_order_product_by_order_id($order_id)
{
    $sql = "SELECT * FROM order_product WHERE order_id = ?";
    return pdo_query($sql, $order_id);
}
function select_all_order_product_by_id($order_id)
{
    $sql = "SELECT orders.*,order_product.*,products.* FROM orders 
    JOIN order_product ON orders.order_id = order_product.order_id 
    JOIN products ON products.product_id = order_product.product_id 
    WHERE orders.order_id = ?";
    return pdo_query($sql, $order_id);
}
function select_orders_product_by_id($order_id)
{
    $sql = "SELECT orders.*,order_product.*,products.* FROM orders 
    JOIN order_product ON orders.order_id = order_product.order_id 
    WHERE orders.order_id = ?";
    return pdo_query_one($sql, $order_id);
}
function select_all_order_product_by_email_and_phone_number($email, $phone_number)
{
    $sql = "SELECT orders.*,order_product.*,products.* FROM orders 
    JOIN order_product ON orders.order_id = order_product.order_id 
    JOIN products ON products.product_id = order_product.product_id 
    WHERE orders.receiver_email = ? AND orders.receiver_number_phone = ?";
    return pdo_query($sql, $email, $phone_number);
}
function count_email_and_phone_number($email, $phone_number)
{
    $sql = "SELECT COUNT(*) FROM orders WHERE receiver_email = ? AND receiver_number_phone = ?";
    return pdo_query_value($sql, $email, $phone_number);
}
function select_orders_by_email_and_phone_number($email, $phone_number)
{
    $sql = "SELECT * FROM orders 
    WHERE orders.receiver_email = ? AND orders.receiver_number_phone = ?";
    return pdo_query($sql, $email, $phone_number);
}
function select_email_and_number_phone($email, $phone_number)
{
    $sql = "SELECT * FROM orders 
    WHERE orders.receiver_email = ? AND orders.receiver_number_phone = ?";
    return pdo_query_one($sql, $email, $phone_number);
}
function select_quantity_order_product($order_id)
{
    $sql = "SELECT SUM(quantity) FROM orders 
    JOIN order_product ON orders.order_id = order_product.order_id 
    WHERE orders.order_id = ? ";
    return pdo_query_value($sql, $order_id);
}
function select_product_order_product($order_id)
{
    $sql = "SELECT products.* FROM orders 
    JOIN order_product ON orders.order_id = order_product.order_id 
    JOIN products ON products.product_id = order_product.product_id 
    WHERE orders.order_id = ? ";
    return pdo_query($sql, $order_id);
}
function delete_order_product_by_order_id($order_id)
{
    $sql = "DELETE FROM order_product WHERE order_id = ?";
    pdo_execute($sql, $order_id);
}
function delete_orders_by_order_id($order_id)
{
    $sql = "DELETE FROM orders WHERE order_id = ?";
    pdo_execute($sql, $order_id);
}
