<?php

include '../../connect.php';

$table = "items";

$id = filterRequest("id");

$name = filterRequest("name");

$namefr = filterRequest("namefr"); 

$desc = filterRequest("desc"); 
$descfr = filterRequest("descfr"); 

$count = filterRequest("count"); 
$active = filterRequest("active"); 
$price = filterRequest("price"); 
$discount = filterRequest("discount"); 

$catid = filterRequest("catid"); 

$imageold  = filterRequest("imageold");


$res =   imageUpload("../../upload/items", "files");

if ($res == "empty") {
    $data = array( 
        "items_name"       => $name,
        "items_name_fr"    => $namefr,
        "items_desc"            => $desc,
        "items_desc_fr"         => $descfr,
        "items_count"           => $count,
        "items_price"           => $price,
        "items_discount"        => $discount,
        "items_active"          => $active, 
        "items_cat"             => $catid 
        );
} else {
   deleteFile("../../upload/categories"  , $imageold) ; 
   $data = array( 
    "items_name"       => $name,
    "items_name_fr"    => $namefr,
    "items_desc"            => $desc,
    "items_desc_fr"         => $descfr,
    "items_count"           => $count,
    "items_price"           => $price,
    "items_discount"        => $discount,
    "items_active"          => $active,
    "items_image"           => $res,
    "items_cat"             => $catid 
    );
}



updateData($table, $data, "items_id = $id");