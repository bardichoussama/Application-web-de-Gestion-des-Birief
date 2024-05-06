<?php
    require_once '../../config/db.php'; 
    require_once '../../model/AuthenticationModel.php'; 
    $db = $database->getConnection();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $authModel = new AuthenticationModel($db);
        $loggedIn = $authModel->login($email, $password, 'APPRENANT'); 
        if ($loggedIn) {
                header('Location: ../../view/apprenant/promo.php'); 
        } else {       
            include_once '../../view/alerts/lgin_fail_message.php';
        }
    }
?>