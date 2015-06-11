<?php
session_start();

if(!isset($_SESSION['BASKET'])){
    $_SESSION['BASKET'] = array();
}

require_once "lib/Validate.php";
require_once "lib/DB.php";
require_once "functions/html.php";

require_once "pages/home.php";
require_once "pages/user.php";
require_once "pages/products.php";
require_once "pages/basket.php";


$contoller = Validate::get('controller','string', 'home');
$action = Validate::get('action', 'string', 'index');


if( class_exists($contoller) )
{
    $obj = new $contoller();
    call_user_func_array( array($obj, $action), []);
} else {
    echo "nqma!";
}