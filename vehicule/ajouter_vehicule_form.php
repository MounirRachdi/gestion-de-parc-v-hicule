<?php
include "../conexion.php"
?>
<html>
<head>
<title>Ajouter un véhicule</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/compte.css">
<style type="text/css">

.bouton
{
background:url(img/button.gif) ;
display:block;
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
	cursor:hand;
}
a.button{
	background:url(img/button.gif);
	display:block;
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
}
a:hover.button{
	color:#0066CC;
}

/* -------------------- */
/* CLASSES				*/
/* -------------------- */
	.ajouter{
		background:url(img/add.gif) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.retour{
		background:url(img/retour.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
 /* [required] {
   border: 2px dotted orange;
}
:required {
   border: 2px dotted orange;
}*/
</style>
</head>
<body marginheight="40" bgcolor="#ffffff">
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>
<p align="center" class="style2"><strong>- Ajouter un véhicule -</strong></p><br>
<form name="ajout_vehicul" method="post" action="ajouter_vehicule.php" >
<center>
<fieldset style="width:70%"><legend style="color:#0033CC">Nouveau vehicule</legend>
<table align="center" border="0" width="100%">
	<tr>
		<td height="51" align="right">Matricule :</td>
	  <td><input type="text" name="matricule" required></td>
		<td align="right">Nombre de place :</td>
		<td><input type="text" name="nbrplace"></td>
	</tr>
	<tr>
		<td height="42" align="right">Puissance :</td>
		<td><input type="text" name="puissance" required></td>
		<td align="right">Statut :</td>
		<td><?php 
			$requete2 = mysql_query("SELECT * FROM statut");
			echo "<select name='statut'>";
			while($resultat2 = mysql_fetch_array($requete2))
				echo "<option value=\"$resultat2[0]\">$resultat2[1]</option>";
			echo "</select>";
			?></td>
	</tr>
	<tr>
		<td height="70" align="right">Numero de carte grise :</td>
		<td><input type="text" name="cartegrise" required></td>
		<td align="right">Type Carburant :</td>
		<td>
		<input type="text" name="carburant" requierd>
		</td>
	</tr>
	<tr>
		<td height="65" align="right">Date d'acquisition :</td>
		<td>
			<input type="date" name="date" required>		</td>
		<td align="right">Km Parcourir: </td>
		<td>
		<input type="text" name="km" required>		</td>
	</tr>
	
	<tr>
		<td height="62" align="right">Modèle :</td>
		<td><input type="text" name="model" ></td>
		<td align="right">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="right">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
</table>

	
<br>
<div align="center">
<table border="0">
<tr><td>
<input type="submit" value="Ajouter" class="bouton"\></td>
<td><input type="reset" value="Annuler" class="bouton"></td></tr></table>
</div>
</fieldset></center>
</form>
</body>
</html>
<?php
// deconnexion de la base
mysql_close();
?>