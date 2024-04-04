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
        $db= $this->conn->prepare("SELECT NOM,PRENOM, ID_BRIEF as brief,TITRE,COUNT(ID_COMPETENCE) AS SKILLS,DATEDIFF((SELECT DATE_FIN FROM realiser WHERE ID_BRIEF= brief GROUP BY DATE_FIN),(SELECT DATE_DEBUT FROM realiser WHERE ID_BRIEF=brief GROUP BY DATE_DEBUT)) as DUREE FROM realiser 
                                    INNER JOIN brief USING(ID_BRIEF) 
                                    INNER JOIN concerne USING(ID_BRIEF)
                                    INNER JOIN formateur USING (ID_FORMATEUR) 
                                    WHERE ID_FORMATEUR = :ID
                                    AND NOW() BETWEEN DATE_DEBUT AND DATE_FIN");
        $db->bindParam(":ID",$ID);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }

    public function addBrief( $formateurId, $titre, $pieceJointe, $dateAjout){
       $db = $this->conn->prepare("INSERT INTO brief ('ID_FORMATEUR','TITRE','PIECE_JOINTE','DATE_AJOUTE')
                             VALUES (':ID',':TITRE',':PIECE_JOINTE',':DATE_JOINT')");
       $db->bindParam(":ID",$formateurId);
       $db->bindParam(":TITRE",$titre);
       $db->bindParam(":PIECE_JOINT",$pieceJointe);
       $db->bindParam(":DATE_AJOUT",$dateAjout);
        $db->execute();
    }

    public function briefProgres($id){
        $db = $this->conn->prepare("SELECT COUNT(*) as progres, (SELECT COUNT(*) FROM realiser WHERE ID_BRIEF=$id ) AS total FROM `realiser` 
                                WHERE ID_BRIEF=$id AND ETAT='done'");
        
         $db->execute();
         return $db->fetch(PDO::FETCH_ASSOC);

    }


}

?>