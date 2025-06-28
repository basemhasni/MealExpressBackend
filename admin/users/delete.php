<?php 

include "../../connect.php" ; 

$id = filterRequest("userid"); 

deleteData("users" , "users_id  = $id"); 