<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rapport</title>
<script language="Javascript" >
function imprimer(){window.print();}

</script>
<style type="text/css">
.mat
{
color:#FF0000;
font-family:"Times New Roman", Times, serif;
font-size:24px;}
table
{
font-size:20px;
}
td
{
text-align:center;}
</style>
</head><body><div align="right"><a href="javascript:history.back()">Retour</a>
</div>
<center>

<div align="right">
<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer"></div>
<h1>Rapport par conducteur</h1></center>
<?php
include "conexion.php";
$cond=$_POST["conducteur"];
$choix=$_POST["periode"];
$mois=$_POST["mois"];
//if( $mois)
//{
if($choix==1)
{
$reqmiss="select c.nom, c.prenom, count(m.id_mission) as nbrmission from conducteur c, mission m where c.id_conducteur=m.id_conducteur and c.CIN='$cond' and MONTH(m.Date_fin) between MONTH(DATE_SUB(CURDATE(), INTERVAL 4 MONTH)) and MONTH(CURDATE()) and year(m.Date_fin) =year(curdate())";
$reqheur="select SUM(hour(p.Date_fin-p.Date_debut)) as heurs from pointage p, conducteur c where c.id_conducteur=p.id_conducteur and MONTH(p.Date_fin) between MONTH(DATE_SUB(CURDATE(), INTERVAL 4 MONTH)) and MONTH(CURDATE()) and c.CIN='$cond'";
$resmiss=mysql_query($reqmiss)or die(mysql_error());
$nbhr=mysql_query($reqheur);
$ligne=mysql_fetch_row($resmiss);
$heur=mysql_fetch_row($nbhr);
?>
<table border="0" align="center" >
<tr><td width="207" height="102">Conducteur:</td>
<td width="78"><?php echo $ligne[0]." ".$ligne[1];?></td>
</tr>
<tr><td height="89">Mission :</td>
<td><?php echo $ligne[2];?></td></tr><tr>
  <td height="71">heurs du travail:</td>
  <td><?php echo $heur[0];?></td></tr></table>
<?php
}
else if($choix==2)
{
$reqmiss="select c.nom, c.prenom, count(m.id_mission) as nbrmission from conducteur c, mission m where c.id_conducteur=m.id_conducteur and c.CIN='$cond' and year(m.Date_fin) =year(curdate())";
$reqheur="select SUM(hour(p.Date_fin-p.Date_debut)) as heurs from pointage p, conducteur c where c.id_conducteur=p.id_conducteur and year(m.Date_fin) =year(curdate()) and c.CIN='$cond'";
$resmiss=mysql_query($reqmiss)or die(mysql_error());
$nbhr=mysql_query($reqheur);
$ligne=mysql_fetch_row($resmiss);
$heur=mysql_fetch_row($nbhr);
?>
<table height="274" border="0" align="center" >
  <tr><td width="207">Conducteur:</td>
<td width="84"><?php echo $ligne[0]." ".$ligne[1];?></td>
</tr>
<tr><td>Mission :</td><td><?php echo $ligne[2];?></td></tr><tr>
  <td>heurs du travail:</td>
  <td><?php echo $heur[0];?></td></tr></table>
<?php
}
else
{

$reqmiss="select c.nom, c.prenom, count(m.id_mission) as nbrmission from conducteur c, mission m where c.id_conducteur=m.id_conducteur and c.CIN='$cond' and MONTH(m.Date_fin)=$mois";
$reqheur="select SUM(hour(p.Date_fin-p.Date_debut)) as heurs from pointage p, conducteur c where c.id_conducteur=p.id_conducteur and MONTH(p.Date_fin) =$mois and c.CIN='$cond'";
$resmiss=mysql_query($reqmiss)or die(mysql_error());
$nbhr=mysql_query($reqheur);
$ligne=mysql_fetch_row($resmiss);
$heur=mysql_fetch_row($nbhr);
?>
<table height="262" border="0" align="center" >
  <tr><td width="207">Conducteur:</td>
  <td width="78"><?php echo $ligne[0]." ".$ligne[1];?></td>
  </tr>
<tr><td>Mission :</td><td><?php echo $ligne[2];?></td></tr><tr>
  <td>heurs du travail:</td>
  <td><?php echo $heur[0];?></td></tr></table>
<?php

}
?>

</body></html>