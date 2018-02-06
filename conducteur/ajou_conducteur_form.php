<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="../css/input_style.css" />
<style type="text/css">
.style2 {
	color: #000066;
	font-family: "Baskerville Old Face";
	font-size: 24px;
	
}

</style>
</head>
<?php
include "../conexion.php";
?>
<body>
<div align="right"><a href="javascript:history.back()"><span>Retour</a>
  </td>
  
</div>
<form method="post" action="Ajouter_conducteur.php">
<center>
<span class="style2"><strong><font face="Comic Sans MS">Ajout d'un nouveau conducteur</font></strong>
</span></center><br><br /><br />
<center>
<fieldset style="width:70%;"><legend style="color:#0033CC">Nouveau Conducteur</legend>

<table align="center" border="0" width="100%">
<tr><td width="70">
Nom: 
</td>
<td width="144">
<input type="text" name="nom" required/></td>

</tr>
<tr><td>
Prenom: 
</td><td>
<input type="text" name="prenom" required/>
</td>
</tr>
<tr><td>
Telephone: 
</td><td>
<input type="text" name="telephone" required />
</td>
</tr>
<tr><td>
N° CIN: 
</td><td>
<input type="text" name="cin" />
</td></tr>
<tr>
<td width="136">Vehicule: </td>
<td width="144"><select name="vehicule" >
  <?php
$req="select * from vehicule ";
$res=mysql_query($req);
while($ligne=mysql_fetch_row($res))
echo "<option value=$ligne[0]>$ligne[0]</option>";
?>
</select></td>
</tr>
<tr><td align="center" colspan="2">

<input type="submit" value="Valider" class="bouton" /></td>
</tr>
</table>
</fieldset></center>
</form>
</body>
</html>
