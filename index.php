<?php session_start();
 //if (isset($_SESSION['bigId'])) {
    //$_SESSION['bigId']= 0;
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="tchat.css">
        <title></title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
    </head>
    <body>
        <div id="container">
            <form method="post" action="tchat_message.php">
                <input id="pseudo" type="text" name="user" placeholder="Votre pseudo" <?php if (isset($_SESSION['pseudo'])) {
                    echo "value=".$_SESSION['pseudo']."";

                } else {
                    echo "value=''";

                    }  ?> />
                <div id="affichage"></div>
                <textarea id="message" name="message"></textarea>
                <input id="bouton" type="submit" value="GO" name="envoyer"/>
            </form>
        </div>
        <script type="text/javascript" src="tchat.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
    </body>
</html>
