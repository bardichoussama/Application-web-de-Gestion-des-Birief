<?php
class search
{
    private $conn;
    private $title;
    public function __construct($conn,$title)
    {
        $this->conn = $conn;
        $this->title = $title;
    }
    public function titleSeaarch(){
        $sql="SELECT * FROM brief WHERE";
    }



}
?>