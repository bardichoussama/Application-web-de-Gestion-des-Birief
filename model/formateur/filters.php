<?php
class filters
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;

    }
    public function formateurTitleSearch($title)
    {
        $sql = "SELECT * FROM brief  INNER JOIN formateur USING(ID_FORMATEUR) WHERE TITRE LIKE '%$title%'";
        $db = $this->conn->prepare($sql);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);

    }

    public function filter_by_year($ID,$ANNEE)
    {
        $sql =" SELECT DATEDIFF(DATE_FIN,DATE_DEBUT) AS DUREE,ID_BRIEF,TITRE,PIECE_JOINTE,IMAGE,NOM,PRENOM,COUNT(ID_COMPETENCE) AS SKILLS FROM affectation 
        INNER JOIN brief USING(ID_BRIEF) 
        INNER JOIN formateur USING(ID_FORMATEUR) 
        INNER JOIN concerne USING(ID_BRIEF) 
        INNER JOIN groupe USING(ID_GROUPE)
        WHERE groupe.ID_FORMATEUR =:ID AND groupe.ANNEE = :ANNEE   --   ID_GROUPE=(SELECT ID_GROUPE FROM groupe WHERE ID_FORMATEUR= 4 AND ANNEE=2020 GROUP BY ID)
        GROUP BY ID_BRIEF";
        $db = $this->conn->prepare($sql);
        $db->bindParam(":ID", $ID);
        $db->bindParam(":ANNEE", $ANNEE);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }


}
?>