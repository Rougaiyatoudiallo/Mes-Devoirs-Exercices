<?php
$tab=array("Dupont"=>array("prenom"=>"Rougaiyatou","ville"=>"Dakar","age"=>"18"),"<br />";
"Schmoll"=>array("prenom"=>"Diaraye","ville"=>"Labe","age"=>"12"),"<br />";
"Smith"=>array("prenom"=>"Badrou","ville"=>"Kermassar","age"=>"19")),"<br />";
while($element=each($tab))
{
    echo "Personne: {$element ['key']} <br />";
    while($coord-each($element[1]))
    {
        echo ``cle {$coord[0]} valeur {$coord[1]} <br /``;
    }
    echo``<hr />``;
}
?>