<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include "../conexion.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liste de tous les maintenances</title>
<link href="..css/tableau.css" rel="stylesheet" type="text/css">
<style type="text/css">

tr:hover{
background-image:url(../image/fond2.png);
border-bottom:none;


}
</style>
<link href="../css/tableau.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Style4 {color: #000099;
text-align:right;}
-->
.Style4:hover{


color:#0033FF;}
</style>
</head>

<body>
<div align="right"><a href="JavaScript:history.back()" class="Style4" ><strong>Retour</strong></a></div><br>
<?php

$requete = "select * from maintenance;";	
$resultat = mysql_query($requete) or die(mysql_error());
?>
<div align="center">
<span class="style2"><strong><font face="Comic Sans MS">Liste de reparation</font></strong><br>
</span><br>
<TABLE border="1" align="center" class="tableau"   >
    <tr class="style3" >
		<th width="100" align="center">Date debut</th>
		<th width="100" align="center">date de fin</th>
		<th width="100" align="center">cout de reparation</th>
		<th width="100" align="center">Atelier de reparation</th>
		<th width="100" align="center">Vehicule</th>
		
	
		
		
	</tr>

<?php
while ($row=mysql_fetch_row($resultat))
{
if(
echo "<tr>";
	/*echo "<td align=\"center\">$row[1]</td>";
	echo "<td align=\"center\">$row[2]</td>";*/
	if( !empty($row[1]) )
		echo "<td align=\"center\">$row[1]</td>";
	else
		echo "<td align=\"center\">---</td>";
	if( !empty($row[2]) )
		echo "<td align=\"center\">$row[2]</td>";
	else
		echo "<td align=\"center\">---</td>";
	
	if( !empty($row[3]) )
		echo "<td align=\"center\">$row[3]</td>";
	else
		echo "<td align=\"center\">---</td>";
		if( !empty($row[4]) )
		echo "<td align=\"center\">$row[4]</td>";
		else
		echo "<td align=\"center\">---</td>";
		//echo "<td align=\"center\">$row[5]</td>";
		$requete1 = "select * from vehicule where id_vehicule='".$row[5]."'";
	$resultat1 = mysql_query($requete1) or die(mysql_error());
	$row1 = mysql_fetch_row($resultat1);
		if( !empty($row1[1]) )
		echo "<td align=\"center\">$row1[1]</td>";
		else
		echo "<td align=\"center\">---</td>";
	echo "<tr>";
	}
?>
</table></div>
</body>
</html>
