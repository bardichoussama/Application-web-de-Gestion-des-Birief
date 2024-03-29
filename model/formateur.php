<?php
    include("config/db.php");
    $sql="SELECT * FROM formateur";
    $formateurs = $conn->getConnection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>