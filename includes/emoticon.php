<?php
    
function emoT($msg)//emoticons
{    
    $tab_emo = [
        "oO", ";)","-_-", 
    ];
    $chemin = "image/";
          
     $tab_lien = [
       "confused.jpg", "wink.ico", "bored.png", 
    ];
    

    $tab_message = explode(" ", $msg);
    $message="";
    for($i=0; $i<count($tab_message); $i++) // pour chaque mot dans le message de l'utilisateurs
    {
    //    $x = strlen($tab_message[$i]);
        for($y=0; $y<count($tab_emo); $y++) //pour chaque emoticons testées
        {            
            if($tab_message[$i] === $tab_emo[$y]) // si on trouve un emoticon parmis les mots du message
            {        
                $tab_message[$i]="";   

                $ch = "<img src=".$chemin.$tab_lien[$y]." alt= ".$tab_lien[$y]." class='smiley' />";
                $tab_message[$i].=$ch ;
         
            }
        }
        $message.=" ".$tab_message[$i];
    }
    return $message;

}

?>