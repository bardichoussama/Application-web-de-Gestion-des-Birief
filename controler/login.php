<?php
    class login{
        private $email;
        private $password;

        public function __construct($email,$password){
            $this->email = $email;
            $this->password=$password;
        }

        public  function mailValidation($input){
            if($this->email==$input){
                return true;
            }
        }

        public function passValidation($input){
            if($this->password==$input){
                return true;
            }
        }
    }
?>