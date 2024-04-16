<?php

require_once("../../config/db.php");
require_once("../../model/formateur/formateur_BP_model.php");

$conn=$database->getConnection();
$brief = new brief($conn);
$learners = $brief->getLearnersInfo($_SESSION["ID_GROUPE"]);
?>