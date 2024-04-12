<?php
session_start(); 

require_once("../../config/db.php");
include_once '../../model/apprenant/apprenant_model.php';

$conn = $database->getConnection();
$apprenant = new Apprenant($conn);


if (isset($_SESSION["ID"])) {
    $apprenantID = $_SESSION["ID"];
    $groupID = $_SESSION["ID_GROUPE"];
    
    // echo "Session ID : " . $apprenantID . "<br>";
    // echo "Session Group: " . $groupID . "<br>";

    $groupInfo = $apprenant->getGroupInfo($_SESSION["ID"]);

    if ($groupInfo) {
        // var_dump($groupInfo);
    } else {
        echo "No group info ";
    }
} else {
    echo "User is not logged in.";
}

?>
