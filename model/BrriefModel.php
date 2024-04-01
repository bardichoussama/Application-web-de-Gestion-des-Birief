<?php

class Brief {
    
    private $conn;
    public $id;
    public $formateurId;
    public $titre;
    public $dateDebut;
    public $dateFin;
    public $pieceJointe;
    public $dateAjout;

  
    public function __construct($id, $formateurId, $titre, $dateDebut, $dateFin, $pieceJointe, $dateAjout) {
        $this->id = $id;
        $this->formateurId = $formateurId;
        $this->titre = $titre;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->pieceJointe = $pieceJointe;
        $this->dateAjout = $dateAjout;
    }

    public function getAllBriefs(){


    }


}

?>
