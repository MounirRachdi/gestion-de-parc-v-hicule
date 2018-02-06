<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Resultat di recherche</title>
<?php
include "../conexion.php";
session_start();
if(!empty($_POST["matricule"]))
$mat=$_POST["matricule"];
else
$mat=$_SESSION["mat"];

$req="select * from vehicule where Matricule='$mat'";
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
	.modifier{
		background:url(img/modif.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.supprimer{
		background:url(img/delete.gif) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.retour{
		background:url(img/retour.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
}
</style>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<p align="right">
	<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer">
</p><br /><br />
<center><span style="font-family:Arial, Helvetica, sans-serif; font-size:15px; font-style:italic;">
<?php
echo "<center><span class=style2>-- Vehicule $ligne[0] --</span></center><br><br><br><br>";


		echo "Model: $ligne[4]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
		
		echo "Puissance: $ligne[1]<br><br><br> ";
		$req1 = "select * from statut where id_statut=$ligne[5]";
	$result = mysql_query($req1) or die(mysql_error());
	$row2 = mysql_fetch_row($result);
		if( !empty($row2[1]) )
		echo "Service: $row2[1]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
		
		echo "Numero du carte grise: $ligne[2]<br><br><br>";
		echo "Nombre du place: $ligne[3]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
		echo "Km_parcourir: $ligne[6]<br><br><br>";
		echo "Date d'aquisition: $ligne[7]<br><br><br>";
		echo "Type carburant: $ligne[8]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
		$req2="select count(*) as nbr from reparation where Matricule='$ligne[0]'";
		$res=mysql_query($req2) or dies(mysql_error());
		if($r=mysql_fetch_row($res))
		echo "Reparation:".$r[0]." fois";
		echo "<br><br><br>";
		$reqm="select count(*) from maintenance where Matricule='$ligne[0]'";
		$resm=mysql_query($reqm) or die (mysql_error());
		if($re=mysql_fetch_row($resm))
		echo "Maintenance: ".$re[0]." fois";
		?>
		<br /><br /><table border="0" ><tr><td>
		<a href="javascript:history.back()" class="button"><span class="retour">Retour</span></a></td><td>
		<a href="modifier_vehicule.php?code=<?php echo $ligne[0];?>" class="button"><span class="modifier">Modifier</span></a></td>
<td>
<a href="supprimer_vehicule.php?code=<?php echo $ligne[0];?>" class="button"><span class="supprimer">Supprimer</span></a></td></tr></table>
		
		</span></center>
</body>
</html>

