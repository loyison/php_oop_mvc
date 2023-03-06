<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

class Users extends Controller {
    public function __construct(){

    }

    //public function index() {
    //    $this->register();
    //}
    public function register(){
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
        } else {
            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            //
            //// Load view
            $this->view('users/register', $data);
        }
    }

    public function login(){
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'name_err' => '',
                'password_err' => '',
            ];
            //
            //// Load view
            $this->view('users/login', $data);
        }
    }
}
