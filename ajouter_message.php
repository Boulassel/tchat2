<?php
session_start();
include './includes/config.php';
include './includes/function.php';

// Ajout d'un nouveau message
if (isset($_POST['envoyer'])) {
    newPDO()->prepare('INSERT INTO messages (user,message) VALUES (:user,:message)')->execute(array(
        'user' => $_REQUEST['user'],
        'message' => $_REQUEST['message'],
    ));
    $_SESSION['pseudo'] = $_POST['user'];
    header('Location: index.php');
    die();
    
}

