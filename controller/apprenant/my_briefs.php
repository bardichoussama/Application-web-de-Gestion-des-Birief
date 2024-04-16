<?php


require_once "../../config/db.php";
require_once "../../model/formateur/formateur_BP_model.php";

$conn = $database->getConnection();
$brief = new brief($conn);
$briefArealiser = $brief->realiseBrief($_SESSION["ID_GROUPE"],$_SESSION["ID"]);
$affecedBP = $brief->getAffecedBP($_SESSION["ID_GROUPE"]);



if ($briefArealiser["ETAT"] == "TODO") {
    $buttonLabel = "Start brief";
    $buttonName = "startBP";
}else{
    $buttonLabel = "END";
    $buttonName = "endBP";
}
if (isset($_POST["startBP"])) {
 
    $result = $brief->updateBriefStatus($briefArealiser["ID_BRIEF"], 'DOING');
    header("location:./appreanat_brief_detail.php"); 
  
}

