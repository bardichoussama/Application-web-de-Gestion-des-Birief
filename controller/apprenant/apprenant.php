<?php
session_start(); // Start the session

require_once("../../config/db.php");
include_once '../../model/apprenant/apprenant_model.php';

$conn = $database->getConnection();
$apprenant = new Apprenant($conn);

// Debug: Check if session ID is set
if (isset($_SESSION["ID"])) {
    $apprenantID = $_SESSION["ID"];
    $groupID = $_SESSION["ID_GROUPE"];
    
    echo "Session ID : " . $apprenantID . "<br>";
    echo "Session Group: " . $groupID . "<br>";

    // Retrieve group info
    $groupInfo = $apprenant->getGroupInfo($_SESSION["ID"]);

    if ($groupInfo) {
        var_dump($groupInfo);
    } else {
        echo "No group info found for the logged-in apprenant.";
    }
} else {
    echo "User is not logged in.";
}

?>
