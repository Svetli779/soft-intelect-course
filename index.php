<?php
require_once "lib/Validate.php";
require_once "functions/html.php";

require_once "pages/home.php";
require_once "pages/user.php";


$contoller = Validate::get('controller','string', 'index');
$action = Validate::get('action', 'string', 'index');

if($contoller == 'index'){
    html_header();

    $page = new Home();

    if($action == "index"){
        $page->index();
    }

    html_footer();

} else if($contoller == 'user') {

    html_header();

    $page = new User();

    if($action == 'login'){
        $page->login();
    } else {
        $page->index();
    }

    html_footer();
} else {
    echo "No page for ".$contoller;
}