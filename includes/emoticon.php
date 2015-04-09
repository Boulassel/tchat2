<?php
    
function emoT($msg)//emoticons
{    
    $tab_emo = [
        ":D", "><","><'",
        ":$",">>","o.o",
        "O.O",":(","<3)",
        "<D","^b^",":'",":'(",
        "(k)","-_-z",">u<",
        ":*","oo'","<$",
        "T-T",";)",":x",
    ];
    $chemin = "image/";
          
     $tab_lien = [
       "Simley-1.ico", "Simley-2.ico", "Simley-3.ico", 
         "Simley-4.ico","Simley-5.ico","Simley-7.ico",
         "Simley-8.ico","Simley-9.ico","Simley-10.ico",
         "Simley-11.ico","Simley-12.ico","Simley-13.ico",
         "Simley-14.ico","Simley-16.ico","Simley-17.ico",
         "Simley-19.ico","Simley-20.ico",
         "Simley-21.ico","Simley-23.ico","Simley-24.ico",
         "Simley-25.ico","Simley-26.ico",
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