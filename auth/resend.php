<?php 

include "../connect.php"  ;

$email = filterRequest("email");

$verfiycode     = rand(10000 , 99999);

$data = array(
"users_verfiycode" => $verfiycode
) ; 

updateData("users" ,  $data  , "users_email = '$email'" ) ; 

sendEmail($email , "Verify Code MealExpress" , "Verfiy Code $verfiycode") ; 