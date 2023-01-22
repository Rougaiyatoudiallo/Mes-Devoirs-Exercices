<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-
8859-1">
<title>Fonction de lecture de tableaux multidimensionnels</title>
</head>
<body>
<?php
//Definition de la fonction
function tabmulti($tab,$bord)
{
   echo "<table border=\"$bord\" width=\"100%\"><tbody>";
foreach($tab as $cle=>$tab2)
  {
    echo "<tr><th>$cle</th> ";
foreach($tab2 as $ind=>$val)
   {
  echo "<td>$val </td>";
    }
echo "</tr>";
  }
  echo "</tbody> </table>";
}
//Definition des tableaux
$tab1 =
array("France"=>array("Paris","Lyon","Marseille","Nantes","Lille"),
"Allemagne"=>array("Berlin","Hambourg","Hanovre","Munich","Cologne"
),
"Espagne"=>array("Madrid","Bilbao","Grenade","Barcelone","Seville")
);
//Appel de la fonction
tabmulti($tab1,1);
?>
</body>
</html>

