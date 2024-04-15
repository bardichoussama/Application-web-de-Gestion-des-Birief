


<?php
session_start(); 

require_once "../../config/db.php";
require_once "../../model/formateur/formateur_BP_model.php";

var_dump($_SESSION["ID_GROUPE"]);
  
$conn = $database->getConnection();
$brief = new brief($conn);
$briefArealiser= $brief->realiseBrief($_SESSION["ID_GROUPE"]);
var_dump($briefArealiser);


