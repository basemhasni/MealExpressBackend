<?php 

include '../../connect.php';

$msgError = array() ;

$table = "categories";

$name = filterRequest("name");

$namefr = filterRequest("namefr"); 

$imagename = imageUpload( "../../upload/categories" , "files") ;

$data = array( 
"categories_name" => $name,
"categories_name_fr" => $namefr,
"categories_image" => $imagename,
);

insertData($table , $data);