<?php
function newPDO() {
    try {
        $oPDO = new PDO(SERVER_DSN_BDD, USER_BDD, MDP_BDD);
    } catch (PDOException $ex) {
        echo '<br/>';
        echo "Echec lors de la connexion à MySQL : (" . $ex->getCode() . ") ";
        echo $ex->getMessage();
        exit();
    }

    return $oPDO;
}

