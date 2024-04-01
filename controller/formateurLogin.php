<?php

require_once '../config/db.php'; 
require_once '../model/AuthenticationModel.php'; 




    $database = new Database();

    $db = $database->getConnection();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];
        $password = $_POST['password'];

 
        $authModel = new AuthenticationModel($db);
        $loggedIn = $authModel->login($email, $password, 'formateur'); 
        
        if ($loggedIn) {
            if($userType == 'formateur'){
                header('Location: ../view/formateur/dashboard_formateur.php'); 
                exit();

            }else{
                header('Location: ../view/apprenant/promo.php'); 
                exit();
            }
           
           
        } else {
            
            echo "Invalid email or password. Please try again.";
        }
    }

?>
