<?php
class formateur
{
        
    private $id;
    private $conn;
    private function getAnne()
    {
        if(date("m")>="09")
        {
        return date("Y");
        }else{
        return date("Y")-1;
        }
        
    }

    public function __construct($id , $conn){
        
        $this->id = $id;
        $this->conn = $conn;

    }

    public function getFormation(){
        $anne = $this->getAnne();
        $db=$this->conn->prepare("SELECT NOM , PRENOM , NOM_GROUPE ,(SELECT ID_GROUPE FROM groupe INNER JOIN formateur USING(ID_FORMATEUR) WHERE ID_FORMATEUR =:ID
        AND F.ID_FORMATEUR = G.ID_FORMATEUR
        AND ANNEE=:ANNEE) AS ID_GROUPE FROM formateur F
        inner join groupe G
        USING(ID_FORMATEUR)
        WHERE ID_FORMATEUR =:ID ");
        $db->bindParam(":ID",$this->id);
        $db->bindParam(":ANNEE",$anne);
        $db->execute();
        return  $db->fetch(PDO::FETCH_ASSOC);
    }
    


}




?>