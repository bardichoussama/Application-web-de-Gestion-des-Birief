<?php
require_once "../../config/db.php";
require_once "../../model/formateur/formateur_BP_model.php";
require_once "../../model/apprenant/search_apprenant.php";
$conn = $database->getConnection();
$brief = new brief($conn);
$search= new search($conn);
$briefArealiser = $brief->realiseBrief($_SESSION["ID_GROUPE"],$_SESSION["ID"]);
$affecedBP = $brief->getAffecedBP($_SESSION["ID_GROUPE"]);
if($briefArealiser && $briefArealiser['LIEN']=="" ){
    if ($briefArealiser["ETAT"] == "TO DO") {
        $buttonLabel = "Start brief";
        $buttonName = "startBP";
    }else{
        $buttonLabel = "END";
        $buttonName = "endBP";
    }
}else{
    $brief->updateRealiserEtat($briefArealiser['ID_BRIEF'],$_SESSION["ID"],"DONE");
    $buttonLabel = "update";
    $buttonName = "endBP";
}
if (isset($_POST["startBP"])) {
    $brief->updateRealiserEtat($briefArealiser["ID_BRIEF"],$_SESSION["ID"],'DOING');
    header("location:./Mybriefs.php"); 
}elseif(isset($_POST["endBP"])){
    header("location:../../view/apprenant/submit-brief.php?id=".$briefArealiser["ID_BRIEF"]);
}
if(isset($_POST["search"])){
    $affecedBP=$search->apprenantTitleSearch($_POST["title"],($_SESSION["ID_GROUPE"]));
}
?>