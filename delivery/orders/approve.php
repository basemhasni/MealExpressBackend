<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$deliveryid = filterRequest("deliveryid");
$userid = filterRequest("usersid");

$data = array(
    "orders_status" => 3 , 
    "orders_delivery" => $deliveryid 
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 2");


sendGCM("warning" , "The Order Has been Approved by delivery" , "admin" , "none" , "none"); 

sendGCM("warning" , "Your order is on the way" , "users$userid" , "none" , "none"); 
