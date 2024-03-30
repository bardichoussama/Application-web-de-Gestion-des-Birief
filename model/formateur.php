<?php

    require_once(ROOT . '\config\db.php');
    $sql="SELECT * FROM formateur";
    $data = $conn->getConnection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>