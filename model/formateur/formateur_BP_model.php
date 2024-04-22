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
    public function getFormateurBP($idFormateur)
    {
        $db = $this->conn->prepare("SELECT * FROM brief
                                   INNER JOIN formateur USING (ID_FORMATEUR) 
                                   WHERE ID_FORMATEUR = :id_formateur ");
        $db->bindParam(":id_formateur", $idFormateur);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAssignedBP($ID, $ID_BRIEF)
    {
        $db= $this->conn->prepare("SELECT  DATEDIFF(DATE_FIN,DATE_DEBUT) AS DUREE,ID_BRIEF,TITRE,PIECE_JOINTE,NOM,PRENOM,COUNT(ID_COMPETENCE) AS SKILLS FROM affectation 
                                   INNER JOIN brief USING(ID_BRIEF) 
                                   INNER JOIN formateur USING(ID_FORMATEUR) 
                                   INNER JOIN concerne USING(ID_BRIEF) 
                                   WHERE ID_GROUPE=:ID AND ID_BRIEF != :ID_BRIEF GROUP BY ID_BRIEF");
        $db->bindParam(":ID", $ID);
        $db->bindParam(":ID_BRIEF", $ID_BRIEF);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getInProgresBP($id)
    {
        $db= $this->conn->prepare("SELECT DATEDIFF(DATE_FIN,DATE_DEBUT) AS DUREE,ID_BRIEF,PIECE_JOINTE,TITRE,NOM,PRENOM,COUNT(ID_COMPETENCE) AS SKILLS FROM affectation 
                                    INNER JOIN brief USING(ID_BRIEF) 
                                    INNER JOIN formateur USING(ID_FORMATEUR) 
                                    INNER JOIN concerne USING(ID_BRIEF) 
                                    WHERE ID_GROUPE=:ID AND NOW() BETWEEN DATE_DEBUT AND DATE_FIN GROUP BY ID_BRIEF");
        $db->bindParam(":ID", $id);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }

    public function briefDetails($idBrief)
    {


        $db = $this->conn->prepare(" SELECT * 
        FROM brief
        INNER JOIN formateur ON brief.ID_FORMATEUR = formateur.ID_FORMATEUR
        INNER JOIN concerne ON brief.ID_BRIEF = concerne.ID_BRIEF
        INNER JOIN competence ON concerne.ID_COMPETENCE = competence.ID_COMPETENCE
        WHERE brief.ID_BRIEF = :id_brief ");


        $db->bindParam(":id_brief", $idBrief);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }

    public function briefCompetence($idBrief)
    {


        $db = $this->conn->prepare(" SELECT * 
        FROM brief B INNER JOIN concerne C ON B.ID_BRIEF = C.ID_BRIEF
        INNER JOIN competence P ON C.ID_COMPETENCE = P.ID_COMPETENCE
        WHERE   C.ID_BRIEF =:id_brief");


        $db->bindParam(":id_brief", $idBrief);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }

    public function briefProgres($id,$idGroupe)
    {
        $db = $this->conn->prepare("SELECT COUNT(*) as progres, (SELECT COUNT(*) FROM realiser INNER JOIN apprenant USING(ID_APPRENANT)INNER JOIN groupe USING(ID_GROUPE) WHERE ID_BRIEF=:id AND ID_GROUPE = :ID_GROUPE) AS total FROM `realiser` 
                                    INNER JOIN apprenant USING(ID_APPRENANT)
                                    INNER JOIN groupe USING(ID_GROUPE)
                                    WHERE ID_BRIEF=:id AND ETAT='done' AND ID_GROUPE = :ID_GROUPE");
        $db->bindParam(":id", $id);
        $db->bindParam(":ID_GROUPE", $idGroupe);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }
    public function addBrief($formateurId, $titre, $pieceJointe, $dateAjout)
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
        $db =  $this->conn->query("SELECT max(ID_BRIEF) as ID FROM brief WHERE ID_FORMATEUR=" . $ID)->fetchAll(PDO::FETCH_ASSOC);
        return  $db[0]["ID"];
    }
    public function assignBP($ID, $GROUPE, $START, $END, $DATE)
    {
        $db = $this->conn->prepare("INSERT INTO `affectation`(`ID_BRIEF`, `ID_GROUPE`, `DATE_DEBUT`, `DATE_FIN`, `DATE_AFFECTATION`) 
        VALUES (:ID_BRIEF,:ID_GROUPE,:DATE_DEBUT,:DATE_FIN,:DATE_AFFECT)");
        $db->bindParam(":ID_BRIEF", $ID);
        $db->bindParam(":ID_GROUPE", $GROUPE);
        $db->bindParam(":DATE_DEBUT", $START);
        $db->bindParam(":DATE_FIN", $END);
        $db->bindParam(":DATE_AFFECT", $DATE);
        $db->execute();
    }
    public function assignToGroup($ID, $GROUPE)
    {
        $apprenants = $this->conn->query("SELECT ID_APPRENANT FROM `apprenant` WHERE ID_GROUPE=" . $GROUPE)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($apprenants as $apprenant) {
            $db = $this->conn->prepare("INSERT INTO `realiser`(`ID_APPRENANT`, `ID_BRIEF`, `ETAT`, `LIEN`) VALUES (:APPRENANT,:ID_BRIEF,'to do','')");
            $db->bindParam(":APPRENANT", $apprenant["ID_APPRENANT"]);
            $db->bindParam(":ID_BRIEF", $ID);
            $db->execute();
        }
    }

    public function realiseBrief($idGroupe, $idApprenanr)
    {

        $db = $this->conn->prepare("SELECT DATEDIFF(A.DATE_FIN, A.DATE_DEBUT) AS DUREE, B.ID_BRIEF,
        B.TITRE, 
        F.NOM, 
        F.PRENOM, 
        R.ETAT, 
        COUNT(C.ID_COMPETENCE) AS SKILLS 
        FROM affectation A
        INNER JOIN brief B ON A.ID_BRIEF = B.ID_BRIEF
        INNER JOIN realiser R ON B.ID_BRIEF = R.ID_BRIEF 
        INNER JOIN formateur F ON B.ID_FORMATEUR = F.ID_FORMATEUR
        INNER JOIN concerne C ON B.ID_BRIEF = C.ID_BRIEF
        INNER JOIN apprenant P on P.ID_APPRENANT=R.ID_APPRENANT
        WHERE A.ID_GROUPE = :idGroupe AND P.ID_APPRENANT=:idApprenant AND NOW() BETWEEN A.DATE_DEBUT AND A.DATE_FIN group by ID_BRIEF ");
        $db->bindParam(":idGroupe", $idGroupe);
        $db->bindParam(":idApprenant", $idApprenanr);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }

    public function getAffecedBP($idGroupe)
    {

        $db = $this->conn->prepare("SELECT * 
        FROM affectation A
         INNER JOIN brief B on A.ID_BRIEF = B.ID_BRIEF
        INNER JOIN formateur F  ON F.ID_FORMATEUR = B.ID_FORMATEUR
        where ID_GROUPE =:idGroupe");

        $db->bindParam(":idGroupe", $idGroupe);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function briefStates($idBrief,$idGroupe)
    {
        $sql="SELECT * FROM `realiser`
        INNER JOIN brief USING(ID_BRIEF) 
        INNER JOIN apprenant USING(ID_APPRENANT)
        INNER JOIN groupe USING (ID_GROUPE)
        WHERE ID_BRIEF=:id_brief AND ID_GROUPE=:id_groupe";
        $db=$this->conn->prepare($sql);
        $db->bindParam(':id_brief',$idBrief);
        $db->bindParam(':id_groupe',$idGroupe);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLearnersInfo($id_groupe)
    {
        $sql="SELECT * FROM apprenant WHERE ID_GROUPE=:ID";
        $db=$this->conn->prepare($sql);
        $db->bindParam(":ID",$id_groupe);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLearnerState($id_apprenant)
    {
        $sql="SELECT * FROM  realiser INNER JOIN brief USING(ID_BRIEF) WHERE ID_APPRENANT = :ID";
        $db=$this->conn->prepare($sql);
        $db->bindParam(":ID",$id_apprenant);
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
    function updateRealiserLink($briefId, $apprenantId, $newLink)
    {



        $stmt = $this->conn->prepare("UPDATE realiser SET LIEN = :lien WHERE ID_BRIEF = :brief_id AND ID_APPRENANT = :apprenant_id");


        $stmt->bindParam(':lien', $newLink);
        $stmt->bindParam(':brief_id', $briefId);
        $stmt->bindParam(':apprenant_id', $apprenantId);


        $stmt->execute();
    } 
    public function updateRealiserEtat($briefId, $apprenantId, $newEtat)
    {


        $stmt = $this->conn->prepare("UPDATE realiser SET ETAT = :etat WHERE ID_BRIEF = :brief_id AND ID_APPRENANT = :apprenant_id");


        $stmt->bindParam(':etat', $newEtat);
        $stmt->bindParam(':brief_id', $briefId);
        $stmt->bindParam(':apprenant_id', $apprenantId);


        $stmt->execute();


    }
}
