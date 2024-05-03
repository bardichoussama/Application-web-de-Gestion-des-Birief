<?php

require_once("../../config/db.php");
require_once("../../model/formateur/formateur_statics.php");
require_once("../../model/formateur/formateur_BP_model.php");
$learnerId =isset($_GET['id']) ? $_GET['id'] : null;
$conn=$database->getConnection();
$statics= new statics($conn);
$brief = new brief($conn);
$aprenant_states = $brief->getLearnerState($learnerId);
$apprenant_static = $statics-> get_learner_statics($learnerId);
$NOT_DONE=$apprenant_static["NOT_DONE"]/$apprenant_static["TOTAL"]*100;
$DONE = $apprenant_static["DONE"]/$apprenant_static["TOTAL"]*100;
$TOTAL=$apprenant_static["TOTAL"]/$apprenant_static["TOTAL"]*100;
echo "[$TOTAL,$DONE,$NOT_DONE]" ;
?>