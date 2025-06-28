<?php

include '../../connect.php';

$table = "categories";

$id = filterRequest("id");

$name = filterRequest("name");

$namefr = filterRequest("namefr");

$imageold  = filterRequest("imageold");


$res =   imageUpload("../../upload/categories", "files");

if ($res == "empty") {
    $data = array(
        "categories_name" => $name,
        "categories_name_fr" => $namefr,
    );
} else {
   deleteFile("../../upload/categories"  , $imageold) ; 
    $data = array(
        "categories_name"    => $name,
        "categories_name_fr" => $namefr,
        "categories_image"   => $res,
    );
}



updateData($table, $data, "categories_id = $id");