<?php
        require_once("../../config/db.php");
        require_once "../../model/formateur/formateur_BP_model.php";
        require_once "../../model/formateur/search.php";

     
        $conn=$database->getConnection();
        $brief = new brief($conn);
        $search= new search($conn);
        $allbriefs=$brief->getAllBriefs();
 
        if(isset($_POST['allBriefs'])){

                $allbriefs =$brief->getAllBriefs();
        }
        elseif(isset($_POST['myBriefs'])){
                $allbriefs = $brief->getFormateurBP($_SESSION["ID"]);

        }elseif(isset($_POST["search"])){
                $allbriefs= $search->formateurTitleSearch($_POST["title"]); 
        }
?>