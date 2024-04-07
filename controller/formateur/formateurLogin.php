<?php
    session_start();
require_once '../../config/db.php';
require_once '../../model/AuthenticationModel.php'; 
require_once '../../model/formateur/formateur_BP_model.php';

    $db = $database->getConnection();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $authModel = new AuthenticationModel($db);
        $loggedIn = $authModel->login($email, $password, 'FORMATEUR');
        if ($loggedIn) {
            $conn=$database->getConnection();
            $brief = new brief($conn);
           $_SESSION["ID_GROUPE"] = $brief->getGroupId($_SESSION["ID"]);
            header('Location: ../../view/formateur/dashboard_formateur.php'); 
        } else {
            echo "Invalid email or password. Please try again.";
        }
    }

?>
