<?php
//Definition de la fonction
function initmaj(&$tab)
foreach('$tab' as '$ind' -> '$val')
    {
        $tab[$ind]=ucfirst(strtolower($val));
    }
    return $tab
    
//Utilisation
$tabch-array("AzertTOTO","Sous peAu","sARTHES jp");
print r(initmaj($tabch));
?>