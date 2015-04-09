<?php
include './includes/config.php';
include './includes/function.php';
session_start();
//var_dump($_GET);

if(isset($_GET['id_message'])){

    $pdoGetUser = newPDO()->prepare('SELECT * FROM messages WHERE id > :id');
    
    $pdoGetUser->execute(array('id' => $_GET['id_message']));
    $resGetUser = $pdoGetUser->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($resGetUser as $key => $value) {
        //$_SESSION['bigId'] = $value['id'];
        echo '<div class="poste">';
        echo '<p data-id="'.$value['id'].'" class="cacher_id">Id message' . $value['id'] . '</p>';
        echo '<p class="pseudo">Pseudo : ' . $value['user'] . '</p>';
        echo '<p class="message">' . $value['message'] . '</p>';
        echo '</div>';
    }
}

//    $pdoGetUser = newPDO()->prepare('SELECT * FROM messages');
//    $pdoGetUser->execute();
//
//    $resGetUser = $pdoGetUser->fetchAll(PDO::FETCH_ASSOC);
//    var_dump($resGetUser);
//    foreach ($resGetUser as $key => $value) {
//        //$_SESSION['bigId'] = $value['id'];
//        echo '<div class="poste">';
//        echo '<p class="pseudo">Pseudo : ' . $value['user'] . '</p>';
//        echo '<p class="message">' . $value['message'] . '</p>';
//        echo '</div>';
   

    

    



