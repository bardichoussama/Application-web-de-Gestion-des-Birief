<?php
    session_start();
require_once '../../config/db.php';
require_once '../../model/AuthenticationModel.php'; 
require_once '../../model/formateur/formateurInfo.php';

    $db = $database->getConnection();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $authModel = new AuthenticationModel($db);
        $loggedIn = $authModel->login($email, $password, 'FORMATEUR');
        if ($loggedIn) {
            $conn=$database->getConnection();
            $formateur = new formateur($_SESSION["ID"],$conn);
            $_SESSION["ID_GROUPE"] = $formateur->getFormation()["ID_GROUPE"];
            var_dump($_SESSION["ID_GROUPE"]);
            header('Location: ../../view/formateur/dashboard_formateur.php'); 
        } else {
            echo "Invalid email or password. Please try again.";
        }
    }

?>
