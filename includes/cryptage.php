<?php
    
function cryptage($msg)
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
    for($i=0; $i<count($tab_message); $i++)
    {
        $x = strlen($tab_message[$i]);
        for($y=0; $y<count($tab_insulte); $y++)
        {            
            if($tab_message[$i] === $tab_insulte[$y])
            {        
                $tab_message[$i]="";        
                $crypt = "";
                for($z=0; $z<$x; $z++)
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