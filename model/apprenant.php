<?php

    require_once(ROOT . '\config\db.php');
    $sql="SELECT * FROM apprenant";
    $data = $conn->getConnection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>