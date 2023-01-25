<?php

    require_once '../core/Database.php';

    class Admins{
        protected $Db;


        public function __construct(){

            $this->Db = new Database();

        }
        public function login($data){

            $sql = "SELECT * FROM brief7.admin WHERE email = :email AND password = :password";
            $this->Db->query($sql);
            $this->Db->bind(":email", $data["Email"]);
            $this->Db->bind(":password", $data["Password"]);


            $row = $this->Db->single();

            $admin_pwd = $row->password;

            if($admin_pwd==$data["Password"]){

                return $row;

            }else{

                return false;
                
            }


        }

    }