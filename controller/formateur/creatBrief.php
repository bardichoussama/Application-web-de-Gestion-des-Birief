<?php
    session_start();
    require_once("../../config/db.php");
    require_once("../../model/formateur/formateur_BP_model.php");
    $conn=$database->getConnection();
    $brief= new brief($conn);
    $competences = $brief->getCompetence();
    if(isset($_POST["publish"])){   
        // $formateur = new formateur($_SESSION["ID"],$conn);
        $add = $brief->addBrief( $_SESSION["ID"], $_POST["nom"], " ", date("Y-m-d"));
        foreach($_POST["competence"] as $compe){
            $db = $conn->prepare("INSERT INTO concerne (ID_BRIEF,ID_COMPETENCE) VALUES (:ID_BRIEF,:ID_COMPETENCE)");
            $db->bindParam(":ID_BRIEF",$brief->getLastBP());
            $db->bindParam("ID_COMPETENCE",$compe);
            $db->execute();
        }
        

    }


?>