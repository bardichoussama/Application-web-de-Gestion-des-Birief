<?php

require_once("../../config/db.php");
include_once '../../model/apprenant/apprenant_model.php';
session_start();

$conn = $database->getConnection();
$apprenant = new Apprenant($conn);


if (isset($_SESSION["ID"])) {
    $cardInfo = $apprenant->getGroupInfo($_SESSION["ID"]);
    $_SESSION["ID_GROUPE"]= $cardInfo["ID_GROUPE"];
    if ($cardInfo) {

    } else {
        echo "No group info ";
    }
} else {
    echo "User is not logged in.";
}

?>
