<?php
    require_once("../../config/db.php");
    require_once("../../model/formateur/formateur_BP_model.php");
    $conn=$database->getConnection();
    session_start();
    $brief= new brief($conn);
    // $add = $brief->addBrief( $formateurId, $titre, $pieceJointe, $dateAjout);
    $competences = $brief->getCompetence();


?>