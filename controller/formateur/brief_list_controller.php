<?php
        require_once("../../config/db.php");
        require_once("../../model/BP_model.php");

     
        $conn=$database->getConnection();
        $brief = new brief($conn);
        $allbriefs=$brief->getAllBriefs();
        $mybriefs = $brief->getFormateurBP($_SESSION["ID"]);
 


        if(isset($_POST['allBriefs'])){

                $allbriefs =$allbriefs;
        }
        elseif(isset($_POST['myBriefs'])){
                $allbriefs =$mybriefs;

        }
        var_dump($mybriefs);  
?>