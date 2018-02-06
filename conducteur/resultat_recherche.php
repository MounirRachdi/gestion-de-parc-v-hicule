<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Resultat di recherche</title>
<?php
include "../conexion.php";
$cin=$_POST["cin"];

$req="select * from conducteur where CIN='$cin' ";
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
	background:url(../image/button.gif);
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
		background:url(../image/modif.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.supprimer{
		background:url(../image/delete.gif) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.retour{
		background:url(../image/retour.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
}
</style>
</head>

<body>
<p align="right">
	<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer">
</p><br /><br />
<center><span style="font-family:Arial, Helvetica, sans-serif; font-size:15px; font-style:italic;">
<?php
echo "<center><span class=style2>--  $ligne[1] $ligne[2] --</span></center><br><br><br><br>";

		echo "Nom: $ligne[1]<br><br><br> ";
		
		
		echo "Prenom: $ligne[2]<br><br><br>";
		echo "N° CIN: $ligne[3]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
		echo "N° du telephone: $ligne[4]<br><br><br><br><br><br>";
	
		
		?>
		<br /><br /><table border="0" ><tr><td>
		<a href="javascript:history.back()" class="button"><span class="retour">Retour</span></a></td><td>
		<a href="modifier_conducteur.php?code=<?php echo $ligne[0];?>" class="button"><span class="modifier">Modifier</span></a></td>
<td>
<a href="supprimer_conducteur.php?code=<?php echo $ligne[0];?>" class="button"><span class="supprimer">Supprimer</span></a></td></tr></table>
		
		</span></center>
</body>
</html>

