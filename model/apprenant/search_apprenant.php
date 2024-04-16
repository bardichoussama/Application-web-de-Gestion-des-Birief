<?php
class search
{
    private $conn;
   
    public function __construct($conn)
    {
        $this->conn = $conn;
      
    }
    public function apprenantTitleSearch($title,$ID_GROUP){
        $sql="SELECT * 
        FROM affectation A
         INNER JOIN brief B on A.ID_BRIEF = B.ID_BRIEF
        INNER JOIN formateur F  ON F.ID_FORMATEUR = B.ID_FORMATEUR
        WHERE ID_GROUPE =:idGroupe AND TITRE LIKE '%$title%'";
        $db=$this->conn->prepare($sql);
        $db->bindParam(':idGroupe',$ID_GROUP);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
        
    }

}
?>