<?php
include "../conexion.php";
$code=$_GET["code"];
$reqq="select * from vehicule where Matricule='$code'";
$ress=mysql_query($reqq) or die(mysql_error());
session_start();


?>
<html>
<head>
<title>Modifier un véhicule</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/input_style.css">
<style type="text/css">


 
</style>
</head>
<body marginheight="40" bgcolor="#ffffff">
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<p align="center" class="style2"><strong>- Modifier un véhicule -</strong></p><br>
<?php
$ligne=mysql_fetch_row($ress);
$_SESSION['mat']=$ligne[0];
?>
<form name="ajout_vehicul" method="post" action="confirm_modif_vehicule.php?code=<?php echo $ligne[0];?>">
<table align="center" border="0">
	<tr>
		<td align="right">Matricule :</td>
	  <td><input type="text" name="matricule" value="<?php echo $ligne[0];?>"></td>
		<td align="right">Nombre de place :</td>
		<td><input type="text" name="nbrplace" value="<?php echo $ligne[3];?>"></td>
	</tr>
	<tr>
		<td align="right">Puissance :</td>
		<td><input type="text" name="puissance" value="<?php echo $ligne[1];?>"></td>
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
		<td align="right">Numero de carte grise :</td>
		<td><input type="text" name="cartegrise" value="<?php echo $ligne[2];?>"></td>
		
	</tr>
	<tr>
		<td align="right">Date d'acquisition :</td>
		<td>
			<input type="date" name="date" value="<?php echo $ligne[7];?>" required>
				</td>
		<td align="right">Km Parcourir: </td>
		<td>
		<input type="text" name="km" value="<?php echo $ligne[6];?>">
		</td>
	</tr>
	
	<tr>
		<td align="right">Modèle :</td>
		<td><input type="text" name="model" value="<?php echo $ligne[4];?>">	</td>
		<td align="right">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="right">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr><td><br></td></tr>
	
</table>

	
<br>
<div align="center"><input id="myButton" type ="submit" value="Enregistrer" class="myButton"></div>
</form>
</body>
</html>
<?php
// deconnexion de la base
mysql_close();
?>