<?php
require_once "lib/Validate.php";
require_once "functions/html.php";

$contoller = Validate::get('controller','string', 'index');
$action = Validate::get('action', 'string', 'index');

if($contoller == 'index'){
    html_header();
    echo "Home";

    if($action == "index"){
        echo "-> index";
    }

    html_footer();

} else if($contoller == 'user') {

    html_header();

    echo "User";
    if($action == 'login'){
        ?>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <?php
    } else {
        echo "-> index";
    }

    html_footer();
} else {
    echo "No page for ".$contoller;
}