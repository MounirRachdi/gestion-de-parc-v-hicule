<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Details vehicule</title>
<?php
include "../conexion.php";
$id=$_GET["code"];
$req="select * from vehicule where id_vehicule=$id";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);

?>
<script language="Javascript" >
function imprimer(){window.print();}
</script>
<link rel="stylesheet" type="text/css" href="../css/tableau.css" />
<style type="text/css">
.style2 {
	color: #000066;
	font-family: "Baskerville Old Face";
	font-size: 24px;

	
}
</style>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<p align="right">
	<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer">
</p><br /><br />
<center><strong><span style="font-family:Arial, Helvetica, sans-serif; font-size:15px; font-style:italic;">
<?php
echo "<center><span class=style2>-- Caractéristique du Materiel $ligne[1] --</span></center><br><br><br><br>";

$requete1 = "select * from model where id_model=$ligne[5]";
	$resultat1 = mysql_query($requete1) or die(mysql_error());
	$row1 = mysql_fetch_row($resultat1);
		if( !empty($row1[1]) )
		echo "Model: $row1[1]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
		else
		echo "---";
		echo "Puissance: $ligne[2]<br><br><br> ";
		$req1 = "select * from statut where id_statut=$ligne[6]";
	$result = mysql_query($req1) or die(mysql_error());
	$row2 = mysql_fetch_row($result);
		if( !empty($row2[1]) )
		echo "Type: $row2[1]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
		$req3="select * from type_carburant where id_carburant=$ligne[9]";
		
		$res3=mysql_query($req3) or die(mysql_error());
		$li=mysql_fetch_row($res3);
		echo "Type_carburant: $li[1]<br><br><br> ";
		echo "Numero du carte grise: $ligne[3]<br><br><br>";
		echo "Nombre du place: $ligne[4]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
		echo "Km_parcourir: $ligne[7]<br><br><br>";
		echo "Date d'aquisition: $ligne[8]<br><br><br>";
		
		?>
		
		<table border="1" align="center" class="tableau">
		<tr><th class="style3">Nom du conducteur</th>
		<th class="style3">Prenom du conducteur</th>
		<th class="style3"> Numero du telephone</th>
		</tr>
		<?php
		echo "<center><span class=style2>-- Utilisateurs du Materiel $ligne[1] --</span></center><br><br>";
		$req2="select nom, prenom, telephone from conducteur where id_vehicule=$ligne[0]";
		$resl=mysql_query($req2) or die(mysql_error());
		while($l=mysql_fetch_row($resl))
		{
		echo"<tr>";
		echo "<td> $l[0]</td>";
		echo "<td> $l[1]</td>";
		echo "<td> $l[2]</td>";
		echo "</tr>";
		
		}
		?>
		</table>
		</span></strong></center>
</body>
</html>
