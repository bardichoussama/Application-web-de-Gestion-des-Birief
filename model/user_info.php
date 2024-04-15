<?php

class User
{
    private $id;
    private $conn;

    public function __construct($id, $conn)
    {
        $this->id = $id;
        $this->conn = $conn;
    }

    public function getUserInfo($user_type)
    {
        $db = $this->conn->prepare("SELECT NOM , PRENOM , NOM_GROUPE , ID_GROUPE FROM $user_type
                                  INNER JOIN groupe 
                                  USING(ID_FORMATEUR)
                                  WHERE ID_FORMATEUR = :ID");
        $db->bindParam(":ID", $this->id);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }
}

?>
