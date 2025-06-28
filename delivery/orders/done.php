<?php


//le changemant d'etat de l'order (on the way  To  done (recive by the customer)) 

include "../../connect.php";

$orderid = filterRequest("ordersid");
$userid = filterRequest("usersid");

$data = array(
    "orders_status" => 4
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 3");

sendGCM("warning" , "The Order Has been deliverd to The Customer" , "admin" , "none" , "none"); 

sendGCM("warning" , "Your Order Has been deliverd" , "users$userid" , "none" , "none"); 

