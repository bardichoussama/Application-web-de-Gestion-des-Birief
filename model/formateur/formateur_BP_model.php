<?php

class Brief
{

    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function getAllBriefs()
    {
        $db =  $this->conn->query("SELECT * FROM brief INNER JOIN formateur USING(ID_FORMATEUR)")->fetchAll(PDO::FETCH_ASSOC);
        return  $db;
    }
    public function getFormateurBP($ID)
    {
        $db = $this->conn->prepare("SELECT * FROM brief
                                   INNER JOIN formateur USING (ID_FORMATEUR) 
                                   WHERE ID_FORMATEUR = :ID ");
        $db->bindParam(":ID", $ID);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAssignedBP($ID,$ID_BRIEF)
    {
        $db= $this->conn->prepare("SELECT  DATEDIFF(DATE_FIN,DATE_DEBUT) AS DUREE,TITRE,NOM,PRENOM,COUNT(ID_COMPETENCE) AS SKILLS FROM affectation 
                                   INNER JOIN brief USING(ID_BRIEF) 
                                   INNER JOIN formateur USING(ID_FORMATEUR) 
                                   INNER JOIN concerne USING(ID_BRIEF) 
                                   WHERE ID_GROUPE=:ID AND ID_BRIEF != :ID_BRIEF GROUP BY ID_BRIEF");
        $db->bindParam(":ID",$ID);
        $db->bindParam(":ID_BRIEF",$ID_BRIEF);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getInProgresBP($id)
    {
        $db= $this->conn->prepare("SELECT DATEDIFF(DATE_FIN,DATE_DEBUT) AS DUREE,ID_BRIEF,TITRE,NOM,PRENOM,COUNT(ID_COMPETENCE) AS SKILLS FROM affectation 
                                    INNER JOIN brief USING(ID_BRIEF) 
                                    INNER JOIN formateur USING(ID_FORMATEUR) 
                                    INNER JOIN concerne USING(ID_BRIEF) 
                                    WHERE ID_GROUPE=:ID AND NOW() BETWEEN DATE_DEBUT AND DATE_FIN GROUP BY ID_BRIEF");
                                    $db->bindParam(":ID",$id);
                                    $db->execute();
                                    return $db->fetch(PDO::FETCH_ASSOC);
    }
    public function briefProgres($id)
    {
        $db = $this->conn->prepare("SELECT COUNT(*) as progres, (SELECT COUNT(*) FROM realiser WHERE ID_BRIEF=$id ) AS total FROM `realiser` 
                                WHERE ID_BRIEF=$id AND ETAT='done'");
        
         $db->execute(); 
         return $db->fetch(PDO::FETCH_ASSOC);

    }
    public function addBrief( $formateurId, $titre, $pieceJointe, $dateAjout)
    {
          
                                   $query = "INSERT INTO `brief` (`ID_FORMATEUR`, `TITRE`, `PIECE_JOINTE`, `DATE_AJOUTE`) 
                                   VALUES (:ID_FORMATEUR, :TITRE, :PIECE_JOINTE, :DATE_AJOUTE)";
                         $db = $this->conn->prepare($query);
                         $db->bindParam(':ID_FORMATEUR', $formateurId);
                         $db->bindParam(':TITRE', $titre);
                         $db->bindParam(':PIECE_JOINTE', $pieceJointe);
                         $db->bindParam(':DATE_AJOUTE', $dateAjout);       
                        $db->execute();
    }
    public function getCompetence()
    {
        $db =  $this->conn->query("SELECT * FROM competence ")->fetchAll(PDO::FETCH_ASSOC);
        return  $db;
    }
    public function getLastBP($ID)
    {
        $db =  $this->conn->query("SELECT max(ID_BRIEF) as ID FROM brief WHERE ID_FORMATEUR=".$ID)->fetchAll(PDO::FETCH_ASSOC);
        return  $db[0]["ID"];
    }
    public function assignBP($ID,$GROUPE,$START,$END,$DATE)
    {
        $db= $this->conn->prepare("INSERT INTO `affectation`(`ID_BRIEF`, `ID_GROUPE`, `DATE_DEBUT`, `DATE_FIN`, `DATE_AFFECTATION`) 
        VALUES (:ID_BRIEF,:ID_GROUPE,:DATE_DEBUT,:DATE_FIN,:DATE_AFFECT)");
        $db->bindParam(":ID_BRIEF",$ID);
        $db->bindParam(":ID_GROUPE",$GROUPE);
        $db->bindParam(":DATE_DEBUT",$START);
        $db->bindParam(":DATE_FIN",$END);
        $db->bindParam(":DATE_AFFECT",$DATE);
        $db->execute();

    }
    public function assignToGroup($ID,$GROUPE)
    {
        $apprenants=$this->conn->query("SELECT ID_APPRENANT FROM `apprenant` WHERE ID_GROUPE=".$GROUPE)->fetchAll(PDO::FETCH_ASSOC);
        foreach( $apprenants as $apprenant)
        {
            $db=$this->conn->prepare("INSERT INTO `realiser`(`ID_APPRENANT`, `ID_BRIEF`, `ETAT`, `LIEN`) VALUES (:APPRENANT,:ID_BRIEF,'to do','')");
            $db->bindParam(":APPRENANT",$apprenant["ID_APPRENANT"]);
            $db->bindParam(":ID_BRIEF",$ID);
            $db->execute();
        }
    }

}
