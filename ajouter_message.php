<?php

include './includes/config.php';
include './includes/function.php';

// Ajout d'un nouveau message
if (isset($_POST['envoyer'])) {
    newPDO()->prepare('INSERT INTO messages (user,message) VALUES (:user,:message)')->execute(array(
        'user' => $_REQUEST['user'],
        'message' => $_REQUEST['message'],
    ));
    header('Location: index.php');
}

