<?php
class Apprenant
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getGroupInfo($id_apprenant)
    {
        $stmt = $this->conn->prepare("SELECT A.*,G.NOM_GROUPE,G.ANNEE,G.ID_GROUPE, (SELECT COUNT(*) FROM apprenant WHERE ID_GROUPE = A.ID_GROUPE) as nbApprenants
        FROM apprenant A
        INNER JOIN groupe G ON A.ID_GROUPE = G.ID_GROUPE
        WHERE ID_APPRENANT = :idApprenant");
        $stmt->bindParam(':idApprenant', $id_apprenant);
      
        $stmt->execute();
        $groupInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($groupInfo) {
            return $groupInfo;
        } else {
            return false;
        }
    }
}