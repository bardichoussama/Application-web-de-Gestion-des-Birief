<?php

class AuthenticationModel
{
    private $conn;
    private $anne;

    public function __construct($db)
    {
        $this->conn = $db;
    }
   

    public function login($email, $password, $userType)
    {
        if ($userType === 'FORMATEUR') {
            $tableName = 'formateur'; 
            if(date("m")<06){
                $annee=date("Y");
            }else{
                $annee=date("Y");
            } 
            $stmt = $this->conn->prepare("SELECT * FROM $tableName INNER JOIN groupe USING(ID_FORMATEUR) WHERE EMAIL = :email AND groupe.ANNEE=:ANNEE "); 
            $stmt->bindParam(":ANNEE", $annee);
        } else {
            $tableName = 'apprenant';
            $stmt = $this->conn->prepare("SELECT * FROM $tableName  WHERE EMAIL = :email ");
        }
        
       
        $stmt->bindParam(':email', $email);

        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $user['MOT_DE_PASSE'] === $password) {
            session_start();
            $_SESSION['annee'] = $annee;
            $_SESSION["ID"] = $user['ID_' . $userType];
            if ($userType === 'APPRENANT') 
            {
                $_SESSION["ID_GROUPE"] = $user['ID_GROUPE'];
            }
            $_SESSION["user"]=$tableName;
            return true;
        }
        return false;
    }  
}