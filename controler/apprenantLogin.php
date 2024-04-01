<?php 
 session_start();
 $who="apprenant";
 define('ROOT', dirname(dirname(__FILE__)));
 require_once(ROOT . '\model\apprenant.php');
 include("controler/validationLogin.php");

?>