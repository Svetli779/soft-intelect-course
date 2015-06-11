<?php
require_once "lib/Validate.php";

$_POST['username'] = 'mraiur';


$contoller = Validate::get('controller','string', 'index');

echo "product_id: ";
echo Validate::get('product_id','number', 0);
echo "<br />";

echo "controller: ";
echo $contoller;
echo "<br />";

echo "username: ";
echo Validate::post('username', 'string');
echo "<br />";