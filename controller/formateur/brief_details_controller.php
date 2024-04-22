<?php

require_once("../../config/db.php");
require_once("../../model/formateur/formateur_BP_model.php");

$briefId =isset($_GET['id']) ? $_GET['id'] : null;
$conn=$database->getConnection();
$brief = new brief($conn);
 $briefDetail=$brief->briefDetails($briefId );
 $briefCompetence =$brief->briefCompetence($briefId);
 $inProgres = $brief->getInProgresBP($_SESSION["ID_GROUPE"]);
if(isset($_POST["done"])){
    $brief->assignBP($briefId,$_SESSION["ID_GROUPE"],"2024-04-14","2024-04-18",date("Y,m,d"));
    $brief->assignToGroup($briefId,$_SESSION["ID_GROUPE"]);
}





