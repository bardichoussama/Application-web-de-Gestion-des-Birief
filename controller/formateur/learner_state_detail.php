<?php

require_once("../../config/db.php");
require_once("../../model/formateur/formateur_statics.php");
require_once("../../model/formateur/formateur_BP_model.php");
$learnerId =isset($_GET['id']) ? $_GET['id'] : null;
if($learnerId == null) {
    $learnerId = $_SESSION["ID"];
}
$conn=$database->getConnection();
$statics= new statics($conn);
$brief = new brief($conn);
$aprenant_states = $brief->getLearnerState($learnerId);
$apprenant_static = $statics-> get_learner_statics($learnerId);
?>