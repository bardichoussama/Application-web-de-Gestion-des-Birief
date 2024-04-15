<?php


require_once "../../config/db.php";
require_once "../../model/formateur/formateur_BP_model.php";

$conn = $database->getConnection();
$brief = new brief($conn);
$briefArealiser = $brief->realiseBrief($_SESSION["ID_GROUPE"],$_SESSION["ID"]);
$affecedBP = $brief->getAffecedBP($_SESSION["ID_GROUPE"]);


$buttonLabel = "Start brief";
$buttonName = "startBP";

if (isset($_POST["startBP"])) {

    $result = $brief->updateBriefStatus($briefArealiser["ID_BRIEF"], 'DOING');
    if ($briefArealiser['ETAT'] == 'DOING') {

        $buttonLabel = "End brief";
        $buttonName = "endBP";
    }
}
