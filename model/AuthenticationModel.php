<?php

require_once '../config/db.php';

class AuthenticationModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login($email, $password, $userType)
    {
        if ($userType === 'formateur') {
            $tableName = 'formateur';
        } else {
            $tableName = 'apprenant';
        }
    
        $stmt = $this->conn->prepare("SELECT * FROM $tableName WHERE EMAIL = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            
            if ($user['MOT_DE_PASSE'] === $password) {
                return true;
            }
        }
        return false;
    }   
}

