<?php
    session_start();
    define('ROOT', dirname(dirname(__FILE__)));
    require_once(ROOT . '\model\formateur.php');
    include("controler/validationLogin.php")

?>