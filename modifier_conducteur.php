<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" href="../css/compte.css" type="text/css" />
<style type="text/css">
body
{
padding:100px 0 0 0 ;}

.Style1 {
	color: #0033FF;
	font-family: "Times New Roman", Times, serif;
}
</style>
</head>
<?php
include "../conexion.php";
$id=$_GET["code"];
$req1="select * from conducteur where id_conducteur=$id";
$resultat=mysql_query($req1) or die(mysql_error());
$line=mysql_fetch_row($resultat);
?>
<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<div align="center" >
  <h3 class="Style1">Modification du conducteur </h3>
</div>

<form method="post" action="confirm_modif_conducteur.php?id=<?php echo $line[0]; ?>">
<center><fieldset style="width:50%"><legend style="color:#FF0000">Modification</legend>  <table align="center" border="0" width="80%">
    <tr>
      <td width="70" height="36"> Nom: </td>
      <td width="534"><input type="text" name="nom" value="<?php echo $line[1]; ?>" /></td>
     
     
    </tr>
    <tr>
      <td height="38"> Prenom: </td>
      <td><input type="text" name="prenom" value="<?php echo $line[2]; ?>" />
      </td>
      
    </tr>
    <tr>
      <td height="35"> Telephone: </td>
      <td><input type="text" name="telephone" value="<?php echo $line[4]; ?>" />
      </td>
     
    </tr>
    <tr>
      <td height="34"> N° CIN: </td>
      <td><input type="text" name="cin" value="<?php echo $line[3]; ?>" />
      </td>
    </tr>
    <tr>
      <td width="70">Vehicule: </td>
      <td width="534"><select name="vehicule">
          <?php
$req="select * from vehicule ";
$res=mysql_query($req);
while($ligne=mysql_fetch_row($res))
echo "<option value=$ligne[0]>$ligne[0]</option>";
?>
      </select></td>
    </tr>
    <tr>
      <td height="35" colspan="2" align="center"><input name="submit" type="submit" value="Valider" />
      </td>
    </tr>
  </table>
  </fieldset></center>
</form>
</body>
</html>
