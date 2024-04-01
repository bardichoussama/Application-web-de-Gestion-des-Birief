<?php

     require_once(ROOT . '\controler\functions.php');
     require_once(ROOT . '\controler\login.php');
     if(isset($_POST["submit"])){
        
         $mailErreur=true;
         $passErreur = true;
         $valid = logingValidation($data,$_POST["email"],$_POST["password"],$mailErreur,$passErreur);
         if($valid != null){
                 $_SESSION["ID"]= $valid;
                 header("location:view/$who/dashboard.php");
         }else{
             if($mailErreur){
                 var_dump($mailErreur);
             }elseif($passErreur){
                 var_dump($passErreur);
             };
         }
     };
 



?>