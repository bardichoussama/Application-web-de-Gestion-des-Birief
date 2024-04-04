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
        $db =  $this->conn->query("SELECT * FROM brief ")->fetchAll(PDO::FETCH_ASSOC);
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
    public function getCurrentBP($ID)
    {
        $db = $this->conn->prepare("SELECT formateur.NOM, formateur.PRENOM, brief.ID_BRIEF, realiser.ETAT, brief.TITRE, COUNT(concerne.ID_COMPETENCE) AS SKILLS, DATEDIFF(realiser.DATE_FIN, realiser.DATE_DEBUT) as DUREE FROM realiser 
                                    INNER JOIN brief ON realiser.ID_BRIEF = brief.ID_BRIEF
                                    INNER JOIN concerne ON concerne.ID_BRIEF = brief.ID_BRIEF
                                    INNER JOIN formateur ON formateur.ID_FORMATEUR = brief.ID_FORMATEUR 
                                    WHERE brief.ID_FORMATEUR = :ID
                                    AND NOW() BETWEEN realiser.DATE_DEBUT AND realiser.DATE_FIN
                                    GROUP BY formateur.ID_FORMATEUR, brief.ID_BRIEF, realiser.ETAT, brief.TITRE, realiser.DATE_DEBUT, realiser.DATE_FIN");
        $db->bindParam(":ID", $ID);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }


    public function addBrief($id, $formateurId, $titre, $pieceJointe, $dateAjout)
    {
        $sql = "INSERT INTO brief (ID_FORMATEUR, TITRE, PIECE_JOINTE, DATE_AJOUTE) VALUES (:id, :formateurId, :titre, :pieceJointe, :dateAjout)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":formateurId", $formateurId);
        $stmt->bindParam(":titre", $titre);
        $stmt->bindParam(":pieceJointe", $pieceJointe);
        $stmt->bindParam(":dateAjout", $dateAjout);
        $stmt->execute();
    }
}
