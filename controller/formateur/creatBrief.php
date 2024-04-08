<?php
    session_start();
    require_once("../../config/db.php");
    require_once("../../model/formateur/formateur_BP_model.php");
    $conn=$database->getConnection();
    $brief= new brief($conn);
    $competences = $brief->getCompetence();
    if(isset($_POST["publish"])){   
        $add = $brief->addBrief( $_SESSION["ID"], $_POST["title"], "piece_joint.pdf", date("Y-m-d"));
        $lastBriefId = $brief->getLastBP();
        foreach($_POST["competence"] as $compe){
            $db = $conn->prepare("INSERT INTO concerne (ID_BRIEF,ID_COMPETENCE) VALUES (:ID_BRIEF,:ID_COMPETENCE)");
            $db->bindParam(":ID_BRIEF",$lastBriefId);
            $db->bindParam("ID_COMPETENCE",$compe);
            $db->execute();
        }
        

    }


?>