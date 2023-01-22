<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Fonction de creation de formulaire</title>
</head>
<body>
<?php
//Definition de la fonction
function
form($action,$methode,$libtexte,$nomtexte,$libradio,$nomradio,$valradio,$libsubmit,$libreset)
{
$code ="<form action=\"$action\" method=\"$methode\" >";
$code.="<fieldset>Completez
";
$code.="<label><b> $libtexte </b></label> <input type=\"text\" name=\"$nomtexte\" /><br />";
$code.="<label><b> $libradio </b></label><input type=\"radio\" name=\"$nomradio\" value=\"$valradio\" /><br />";
$code.="<input type=\"submit\" value=\"$libsubmit\"/>   ";
$code.="<input type=\"reset\" value=\"$libreset\" /><br />";
$code.="</fieldset>";
$code.="</form>";
return $code;
}
//Utilisation
echo form("machin.php","post","Nom","nom","Abonne","abonn","oui","Envoi","Effacer");
echo form("truc.php","post","Loisirs","loisir","Amateur","amat","oui","Envoi","Effacer");
?>
</body>
</html>