<?php

include './includes/config.php';
include './includes/function.php';
var_dump($_POST);

if (array_key_exists('id', $_REQUEST))
    die(json_encode(newPDO()->prepare('SELECT * FROM messages WHERE id > :id')->execute($_REQUEST)));

newPDO()->prepare('INSERT INTO messages (user,message) VALUES (:user,:message)')->execute(array(
    'user' => $_REQUEST['user'],
    'message' => $_REQUEST['message'],
));
