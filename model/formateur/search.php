<?php
class search
{
    private $conn;
   
    public function __construct($conn)
    {
        $this->conn = $conn;
      
    }
    public function formateurTitleSearch($title){
        $sql="SELECT * FROM brief  INNER JOIN formateur USING(ID_FORMATEUR) WHERE TITRE LIKE '%$title%'";
        $db=$this->conn->prepare($sql);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
        
    }


}
?>