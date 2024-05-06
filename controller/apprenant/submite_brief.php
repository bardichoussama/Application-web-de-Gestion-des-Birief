<?php

require_once("../../config/db.php");
include_once '../../model/formateur/formateur_BP_model.php';
$conn = $database->getConnection();
$submit= new brief($conn);
if(isset($_POST['update'])){
    $briefId =isset($_GET['id']) ? $_GET['id'] : null;
    $submit->updateRealiserLink($briefId , $_SESSION["ID"],$_POST["link"]);
    header("location:../../view/apprenant/Mybriefs.php"); 

}



?>