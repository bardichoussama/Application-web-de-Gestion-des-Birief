<?php




class statics
{

    private $conn;
public function __construct($conn)
    {
        $this->conn = $conn;
    }
public function get_breif_statics($id,$id_groupe)
   {
        $requet="SELECT count(ID_apprenant) AS TOTAL,
            (SELECT count(ID_apprenant) FROM REALISER INNER join APPRENANT USING(ID_APPRENANT) INNER JOIN GROUPE USING(ID_GROUPE )  WHERE ETAT='DONE' AND ID_BRIEF=:ID AND ID_GROUPE=:ID_GROUPE ) AS DONE,
            (SELECT count(ID_apprenant) FROM REALISER INNER join APPRENANT USING(ID_APPRENANT) INNER JOIN GROUPE USING(ID_GROUPE )  WHERE ETAT='NOT DONE' AND ID_BRIEF=:ID AND ID_GROUPE=:ID_GROUPE) AS NOT_DONE FROM  realiser 
            INNER join APPRENANT USING(ID_APPRENANT) 
            INNER JOIN GROUPE USING(ID_GROUPE ) 
            WHERE ID_BRIEF = :ID AND ID_GROUPE=:ID_GROUPE";
        $db = $this->conn->prepare( );
        $db->bindParam(":ID", $id);
        $db->bindParam(":ID_GROUPE", $id_groupe);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
public function get_learner_statics($id)
    {
        $requet="SELECT count(ID_BRIEF) AS TOTAL,
                (SELECT count(ID_apprenant) FROM REALISER  WHERE ETAT='DONE' AND ID_APPRENANT=:ID ) AS DONE,
                (SELECT count(ID_apprenant) FROM REALISER WHERE ETAT='NOT DONE' AND ID_APPRENANT=:ID) AS NOT_DONE FROM  realiser 
                WHERE ID_APPRENANT = :ID ;";
        $db = $this->conn->prepare( );
        $db->bindParam(":ID", $id);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }

}





?>