<?php
class formateur
{
        
    private $id;
    private $conn;

    public function __construct($id , $conn){
        
        $this->id = $id;
        $this->conn = $conn;

    }

    public function getFormation(){
        $db=$this->conn->prepare("SELECT NOM , PRENOM , NOM_GROUPE FROM formateur
                                  inner join groupe 
                                  USING(ID_FORMATEUR)
                                  WHERE ID_FORMATEUR =:ID");
        $db->bindParam(":ID",$this->id);
        $db->execute();
        return  $db->fetch(PDO::FETCH_ASSOC);
    }



}




?>