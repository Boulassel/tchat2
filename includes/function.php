<?php
function newPDO() {
    try {
        $oPDO = new PDO('mysql:host=192.168.3.93;dbname=' . BDD, USER_BDD, MDP_BDD);
    } catch (PDOException $ex) {
        echo '<br/>';
        echo "Echec lors de la connexion à MySQL : (" . $ex->getCode() . ") ";
        echo $ex->getMessage();
        exit();
    }

    return $oPDO;
}

