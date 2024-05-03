<?php

require_once("learner_state_detail.php");

$NOT_DONE=$apprenant_static["NOT_DONE"]/$apprenant_static["TOTAL"]*100;
$DONE = $apprenant_static["DONE"]/$apprenant_static["TOTAL"]*100;
$TOTAL=$apprenant_static["TOTAL"]/$apprenant_static["TOTAL"]*100;


echo"[$TOTAL,$NOT_DONE,$DONE]"


?>