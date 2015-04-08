<?php
include './includes/config.php';
include './includes/function.php';
session_start_once();

//var_dump($_SESSION);

if (isset($_SESSION['bigId'])) {

    $oPDO = newPDO();
    $req = "SELECT * FROM messages"; //WHERE id > :id
    $pdoGetUser = $oPDO->prepare($req);
    
    $pdoGetUser->execute(array('id' => $_SESSION['bigId']));
    $resGetUser = $pdoGetUser->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($resGetUser as $key => $value) {
        $_SESSION['bigId'] = $value['id'];
        echo '<div class="poste">';
        echo '<p class="pseudo">Pseudo : ' . $value['user'] . '</p>';
        echo '<p class="message">' . $value['message'] . '</p>';
        echo '</div>';
    }
    
} else {
    $oPDO = newPDO();

    $req = "SELECT * FROM messages";

    $pdoGetUser = $oPDO->prepare($req);
    $pdoGetUser->execute();

    $resGetUser = $pdoGetUser->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resGetUser as $key => $value) {
        $_SESSION['bigId'] = $value['id'];
        echo '<div class="poste">';
        echo '<p class="pseudo">Pseudo : ' . $value['user'] . '</p>';
        echo '<p class="message">' . $value['message'] . '</p>';
        echo '</div>';
    }
}

// Ajout d'un nouveau message
 if (array_key_exists('envoyer', $_REQUEST)) {
    newPDO()->prepare('INSERT INTO messages (user,message) VALUES (:user,:message)')->execute(array(
        'user' => $_REQUEST['user'],
        'message' => $_REQUEST['message'],
    ));
    header('Location: index.html');
}