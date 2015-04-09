<?php
    
function cryptage($msg)// censure les insultes
{    
    $tab_insulte = [
        "con", "connard", "enculé", "encule", 
        "cul", "bâtard", "salope", "encule", 
        "connasse", "conne", "crétin", "enfoiré", 
        "pute", "merde", "putain", "pd", "pédé", 
        "poufiasse", "pétasse", "foutre", "salaud", 
        "salopard", "saloperie", "sodomite", "tafiole", 
        "bite"
    ];

    $tab_message = explode(" ", $msg);
    $message="";
    for($i=0; $i<count($tab_message); $i++) // pour chaque mot dans le message de l'utilisateurs
    {
        $x = strlen($tab_message[$i]);
        for($y=0; $y<count($tab_insulte); $y++) //pour chaque insultes testées
        {            
            if($tab_message[$i] === $tab_insulte[$y]) // si on trouve une insulte parmis les mots du message
            {        
                $tab_message[$i]="";// on réinitialise le mot pour lui attribuer par la suite des étoiles à la place      
                $crypt = "";
                for($z=0; $z<$x; $z++) // on met une * par caractères trouvés
                {                           
                    $crypt.='*';  
                }
                $tab_message[$i].=$crypt;                
            }
        }
        $message.=" ".$tab_message[$i];
    }
    return $message;

}

?>