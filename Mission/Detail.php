<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<script language="Javascript" >
function imprimer(){window.print();}
</script>
<style type="text/css">
.style2 {
	color: #000066;
	font-family: "Baskerville Old Face";
	font-size: 24px;

	
}


tr
{

}
td{
text-align:center;
border-left:none;
border-right:none;
border-bottom:none;
border-top:none;

}


</style>
</head><body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<p align="right">
	<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer cette page">
</p>
<table align="center" border="1" style="font-family:Arial, Helvetica, sans-serif; font-size:24px; font-style:italic;">
<?php
include "../conexion.php";
$id=$_GET["code"];
$req="select * from mission where id_mission=$id";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);
echo "<center><span class=style2>-- Caractéristique du mission N° $ligne[0] --</span></center><br><br><br><br>";
$req1="select * from conducteur where id_conducteur=$ligne[1]";
$res1=mysql_query($req1)or die(mysql_error());
$lig=mysql_fetch_row($res1) ;
echo " <tr > <td width=100 align=center>Conducteur:</td><td> $lig[1] $lig[2] </td></tr>";
echo "<tr><td colspan='2' height='30'></td></tr>";

$req2="select * from vehicule where id_vehicule=$ligne[2]";
$res2=mysql_query($req2) or die(mysql_error());
$li=mysql_fetch_row($res2);
echo "<tr><td width=100 align=center>Vehicule: </td><td>$li[1]</td></tr> ";
echo "<tr><td colspan='2' height='30'></td></tr>";

echo "<tr> <td width=100 align=center>Objectif du mission:</td><td> $ligne[3]</td></tr>";
echo "<tr><td colspan='2' height='30'></td></tr>";

echo " <tr><td width=100 align=center>Km_Parcourir:</td><td> $ligne[4]</td></tr>";
echo "<tr><td colspan='2' height='30'></td></tr>";

echo "<tr><td width=100 align=center>Qté_Carburant:</td><td> $ligne[5] </td></tr>";
echo "<tr><td colspan='2' height='30'></td></tr>";

echo "<tr><td width=100 align=center>Date de debut:</td><td> $ligne[6]</td></tr> ";
echo "<tr><td colspan='2' height='30'></td></tr>";

echo "<tr><td width=100 align=center>Date du fin:</td><td> $ligne[7] </td></tr>";
?>

</table>
</body>
</html>
