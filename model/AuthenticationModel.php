<?php

class AuthenticationModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }
   

    public function login($email, $password, $userType)
    {
        if ($userType === 'FORMATEUR') {
            $tableName = 'formateur';
        } else {
            $tableName = 'apprenant';
        }

        $stmt = $this->conn->prepare("SELECT * FROM $tableName WHERE EMAIL = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $user['MOT_DE_PASSE'] === $password) {
            session_start();
            $_SESSION["ID"] = $user['ID_' . $userType];
            if ($userType) {
                $_SESSION["ID_GROUPE"] = $user['ID_GROUPE'];
            }
            return true;
        }
        return false;
    }  
}