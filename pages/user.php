<?php
class User{
    public function index(){
        html_header();
        echo "User -> index page";
        html_footer();
    }

    public function login(){

        $email = Validate::post('email');
        $password = Validate::post('password');

        if($email != null && $password != null){
            
        }

        html_header();?>
        <form action="?controller=user&action=login" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <?php
        html_footer();
    }
}