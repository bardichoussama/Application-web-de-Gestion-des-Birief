<?php
    define('ROOT', dirname(dirname(__FILE__)));
    require_once(ROOT . '\model\formateur.php');
    require_once(ROOT . '\controler\functions.php');
    require_once(ROOT . '\controler\login.php');

    if(isset($_POST["submit"])){
        header("location:view/formateur/dashboard.php");
        $mailErreur=true;
        $passErreur = true;
        if(logingValidation($formateurs,$_POST["email"],$_POST["password"],$mailErreur,$passErreur)){
                // header("location:view/formateur/dashboard.php");
        }else{
            if(!$mailErreur){
                var_dump($mailErreur);
            }elseif(!$passErreur){
                var_dump($passErreur);
            };
        }
    };

?>