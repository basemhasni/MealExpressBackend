<?php
$dsn = "mysql:host=localhost;dbname=bessemha_mealexpress";
$user = "bessemha_bessemhasni";
$pass = "BBBos555";

$countrowinpage = 9;
try {
   $con = new PDO($dsn, $user, $pass);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
   include "functions.php";
   if (!isset($notAuth)) {
      // checkAuthenticate();
   }
} catch (PDOException $e) {
   echo $e->getMessage();
}