<?php
include './includes/config.php';
include './includes/function.php';
session_start();

if (isset($_SESSION['bigId'])) {


    $pdoGetUser = newPDO()->prepare('SELECT * FROM messages WHERE id > :id');
    
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
    $pdoGetUser = newPDO()->prepare('SELECT * FROM messages');
    $pdoGetUser->execute();

    $resGetUser = $pdoGetUser->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resGetUser as $key => $value) {
        $_SESSION['bigId'] = $value['id'];
        echo '<div class="poste">';
        echo '<p class="pseudo">Pseudo : ' . $value['user'] . '</p>';
        echo '<p class="message">' . $value['message'] . '</p>';
        echo '</div>';
    }

    $_SESSION['pseudo'] = $value['user'];

    
}


