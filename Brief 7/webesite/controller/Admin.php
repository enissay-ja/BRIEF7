<?php

require_once '../module/Admins.php';

class Admin
{

    protected $AdminModel; // Attribute

    public function __construct()
    { // __construct => Magic method => have a relationship with the life cycle of this class
        // Encapsultion : to protect your data 
        $this->AdminModel = new Admins; // New keyword => to create an object from that class 

    }

    public function Login()
    { // Method 

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [

            "Email" => $_POST["email"],
            // $_ => GLOBAL FUNCTION 
            "Password" => md5($_POST["password"])

        ];

        // validation 

        if (empty($data["Email"] || $data["Password"])) {

            header("location: ../view/login.php");
            die("Sorry,  you need to fill all inputs");

        } else {

            $loggedIn = $this->AdminModel->login($data); // fetch the data from module 

            if ($loggedIn) {
                $this->createSession($loggedIn);
            }else {
                die("Pleae try later :)");
            }

        }




    }


    public function createSession($user)
    {
        session_start();
        $_SESSION["Email"] = $user->email;

        if ($_SESSION["Email"] == "yassine@gmail.com") {

            header("location: ../view/dashboard.php");

        } else {

            header("location : ../view/index.php");

        }

    }


    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header("location: ../view/index.php");
    }

}

$init = new Admin();


if($_SERVER["REQUEST_METHOD"] == "POST"){

    switch($_POST["type"]){
        case "login":
            $init->Login();
            break;

    }
    
}