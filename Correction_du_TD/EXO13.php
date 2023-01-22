<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset> 
        <legend><b>Saisissezle prix HT et le taux TVA </b></legend>
        <table border="0" >
            <tr>
                <td>Prix Hors Taxes : </td>
                <td><input  type="text"  name="prixht"  value="<?=$_POST['prixht']?>" /></td>
            </tr>

<?php
if(!empty($_POST['prixht']) AND !empty($_POST['tva']) )
{
    echo"<tr><td>Montant de la TVA :</td><td><input type=\"text\"value=\"",round($_POST['prixht']*$_POST['tva']/100,2)
    ."\"/></td></tr>";
}
else
{
    echo"<b>le formulaire est incomplet !</b?";

}
?>

    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="ENVOI" /></td>
    </tr>
        </table>
    </fieldset>  
    </form>
    
</body>
</html>