<?php

class Brief {
    
    private $conn;
  
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllBriefs(){
        $db =  $this->conn->query("SELECT * FROM brief ")->fetchAll(PDO::FETCH_ASSOC);
        return  $db;
    }

    public function getFormateurBP($ID){    
        $db= $this->conn->prepare("SELECT * FROM brief
                                   INNER JOIN formateur USING (ID_FORMATEUR) 
                                   WHERE ID_FORMATEUR = :ID ");
        $db->bindParam(":ID",$ID);
        $db->execute();
        return$db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCurrentBP($ID){
        $db= $this->conn->prepare("SELECT NOM,PRENOM, ID_BRIEF,ETAT,TITRE,COUNT(ID_COMPETENCE) AS SKILLS,DATEDIFF((SELECT DATE_FIN FROM realiser),(SELECT DATE_DEBUT FROM realiser)) as DUREE FROM realiser 
                                    INNER JOIN brief USING(ID_BRIEF) 
                                    INNER JOIN concerne USING(ID_BRIEF)
                                    INNER JOIN formateur USING (ID_FORMATEUR) 
                                    WHERE ID_FORMATEUR = :ID
                                    AND NOW() BETWEEN DATE_DEBUT AND DATE_FIN
                                    GROUP BY ID_FORMATEUR ");
        $db->bindParam(":ID",$ID);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }

    public function addBrief($id, $formateurId, $titre, $pieceJointe, $dateAjout,){
        $sql="INSERT INTO brief ('ID_FORMATEUR','TITRE','PIECE_JOINTE','DATE_AJOUTE') VALUES ($id,$formateurId,$titre,$pieceJointe,$dateAjout)";
        $conn->prepare($sql);
        $conn->execute();
    }


}

?>