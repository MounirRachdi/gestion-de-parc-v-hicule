<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Visite</title>
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
	background:url(../img/button.gif);
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
		background:url(../img/modif.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.supprimer{
		background:url(../img/delete.gif) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.retour{
		background:url(../img/retour.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
}
.Style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #0000FF;
}
</style>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<?php
include "../../conexion.php";
$mat=$_POST["matricule"];
$req=" select * FROM visite where Matricule='$mat' and Datevisite>CURDATE() ";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);
session_start();
$_SESSION["id_visite"]=$ligne[0];
?>
<center >
<strong ><span class="Style3">Matricule : <?php echo $ligne[1];    ?></span><br />
<br /><br /><br />
</strong><br />
<br />
<strong>Date de visite: <?php echo $ligne[3];   ?></strong>

<br /><br /><br /><br /><br /><br />
<table border="0" ><tr><td>
		<a href="javascript:history.back()" class="button"><span class="retour">Retour</span></a></td><td>
		<a href="Modifier_visite.php?id=<?php echo $ligne[0];?>" class="button"><span class="modifier">Modifier</span></a></td>
<td>
<a href="supprimer_visite.php?id=<?php echo $ligne[0];?>" class="button"><span class="supprimer">Supprimer</span></a></td></tr></table>
</center>
</body>
</html>
