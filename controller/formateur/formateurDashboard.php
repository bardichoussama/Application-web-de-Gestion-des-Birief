<?php
    session_start();
    if( $_SESSION["ID"]!="" && is_numeric($_SESSION["ID"]) ){
        require_once("../../config/db.php");
        require_once("../../model/formateur/formateurInfo.php");
        require_once("../../model/formateur/formateur_BP_model.php");
            $conn=$database->getConnection();
            $formateur = new formateur($_SESSION["ID"],$conn);
            $cardInfo = $formateur->getFormation();
            $brief = new brief($conn);
            var_dump($_SESSION["ID"]);
            $inProgres = $brief->getInProgresBP($_SESSION["ID_GROUPE"],$_SESSION["ID"]);
            if($inProgres){
                $progresID=$inProgres["ID_BRIEF"];
                var_dump( $progresID);
            }else{
                $progresID=0;
            }
       
            var_dump($_SESSION["ID_GROUPE"]);
          $assignedBP = $brief->getAssignedBP($_SESSION["ID_GROUPE"],$progresID);
          var_dump($assignedBP);
          if(!empty($assignedBP ) ){
            echo'full';
         

          }else{
            echo 'is empty';
          }
            
           
            $briefProgress=$brief->briefProgres($progresID);   
             
             
    }else{
        header("location:../../view/formateur/formateurLogin.php");
    }
        

?>