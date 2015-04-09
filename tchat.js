function scrollaff()
{   
    $(document).ready(function()
    {
        $('#affichage').animate({ scrollTop: 999999999}, 500);
    });
    // var topPos = $('#affichage').offsetTop;
    // document.$('#affichage').scrollTop = topPos;

// $("#affichage").animate({ 
//     scrollTop: $('#affichage').offset().top - ($(window).height()-$("#affichage").outerHeight() +10)
// }, 500);
}

//scrollaff();






//php
// Ajout d'un nouveau message
 if (array_key_exists('envoyer', $_REQUEST)) {
    if($_REQUEST['user'] != "" && $_REQUEST['message'] =! "")
    {
        newPDO()->prepare('INSERT INTO messages (user,message) VALUES (:user,:message)')->execute(array(
            'user' => $_REQUEST['user'],
            'message' => $_REQUEST['message'],
        ));
        $_SESSION['pseudo'] = $value['user'];

        header('Location: index.php');
    }
    else
    {
        echo "Pseudo ou message vide";        
    }
}
