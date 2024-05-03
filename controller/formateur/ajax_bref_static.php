<?php
session_start();
require_once ("../../config/db.php");
require_once ("../../model/formateur/formateur_statics.php");
$briefId = isset($_GET['id']) ? $_GET['id'] : null;
$conn = $database->getConnection();
$statics = new statics($conn);
$brief_static = $statics->get_breif_statics($briefId, $_SESSION["ID_GROUPE"]);
$NOT_DONE=$brief_static["NOT_DONE"]/$brief_static["TOTAL"]*100;
$DONE = $brief_static["DONE"]/$brief_static["TOTAL"]*100;
$TOTAL=$brief_static["TOTAL"]/$brief_static["TOTAL"]*100;
echo "$TOTAL,$DONE,$NOT_DONE";




?>