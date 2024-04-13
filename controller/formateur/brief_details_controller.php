<?php

require_once("../../config/db.php");
require_once("../../model/formateur/formateur_BP_model.php");

$briefId =isset($_GET['id']) ? $_GET['id'] : null;
var_dump($briefId);

$conn=$database->getConnection();
$brief = new brief($conn);

 $briefDetail=$brief->briefDetails($_SESSION["ID"],$briefId);
 $briefCompetence =$brief->briefCompetence($briefId);

var_dump($briefCompetence);



