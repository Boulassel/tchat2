<?php session_start();
 //if (isset($_SESSION['bigId'])) {
    //$_SESSION['bigId']= 0;
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="tchat.css">
        <title></title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
    </head>
    <body>
        <div id="container">
            <form method="post" action="ajouter_message.php" id="form_message">
                <input id="pseudo" type="text" name="user" placeholder="Votre pseudo" <?php if (isset($_SESSION['pseudo'])) {
                    echo "value=".$_SESSION['pseudo']."";

                } else {
                    echo "value=''";

                    }  ?> />
                    <p style="font-size:130%;"><u>Couleur de mes messages:</u></p>
                <div id="red" class="couleur"></div>
                <div id="green" class="couleur"></div>
                <div id="yellow" class="couleur"></div>
                <div id="blue" class="couleur"></div>

                <div id="affichage"></div>
                <textarea id="message" name="message"></textarea>
                <button id="bouton" type="submit" value="GO" name="envoyer"><i class="fa fa-envelope"></i></button>
            </form>
            <footer></footer>
        </div>
        <script type="text/javascript" src="tchat.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
    </body>
</html>
