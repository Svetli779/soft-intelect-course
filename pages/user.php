<?php
class User{
    public function index(){
        html_header();
        echo "User -> index page";
        html_footer();
    }

    public function login(){
        html_header();
        echo "User -> login page";
        html_footer();
    }
}