<?php
    require_once '../config/db.php'; 
    require_once '../model/AuthenticationModel.php'; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $authModel = new AuthenticationModel($db);
        $loggedIn = $authModel->login($email, $password, 'apprenant'); 
        if ($loggedIn) {
                header('Location: ../view/apprenant/dashboard_apprenant.php'); 
                exit();
        } else {       
            echo "Invalid email or password. Please try again.";
        }
    }
?>