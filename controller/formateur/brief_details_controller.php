<?php

require_once("../../config/db.php");
require_once("../../model/formateur/formateur_BP_model.php");

$briefId =isset($_GET['id']) ? $_GET['id'] : null;
$conn=$database->getConnection();
$brief = new brief($conn);
 $briefDetail=$brief->briefDetails($briefId ,$_SESSION["ID"]);
 $briefCompetence =$brief->briefCompetence($briefId);





