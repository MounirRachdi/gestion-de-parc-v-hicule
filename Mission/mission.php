<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<?php
include "../conexion.php";
$req="select * from mission";



?>
<style type="text/css">

.style3 {
	color: #B82130;
	font-family: "Baskerville Old Face";
	font-size: 14px;
}
.style2 {
	color: #000066;
	font-family: "Baskerville Old Face";
	font-size: 24px;
	
}

tr:hover{
background-image:url(../image/fond2.png);
border-bottom:none;


}


</style>
</head>

<body>
<div align="right"><a href="JavaScript:history.back()" class="Style4" ><strong>Retour</strong></a></div><br>
<center>
<span class="style2"><strong><font face="Comic Sans MS">Liste des missions</font></strong>
</span></center><br><br />
<table align="center" border="1">
 <tr class="style3" >
		<th width="100" align="center">Nom du conducteur</th>
		<th width="100" align="center">Vehicule</th>
		<th width="100" align="center">Objectif</th>
		<th width="100" align="center">Km_parcourir</th>
		<th width="100" align="center">Quantité du carburant</th>
		<th width="100" align="center">Date de debut</th>
		<th width="100" align="center">Date du fin</th>
		<th width="100" align="center">Detail</th>
		
		
	</tr>

<?php
$res=mysql_query($req) or die(mysql_error());
while($ligne=mysql_fetch_row($res))
{echo "<tr> ";
$req1="select * from conducteur where id_conducteur=$ligne[1]";
$res1=mysql_query($req1)or die(mysql_error());
$lig=mysql_fetch_row($res1) ;

echo "<td align=center> $lig[1] </td>";
$req2="select * from vehicule where id_vehicule=$ligne[2]";
$res2=mysql_query($req2) or die(mysql_error());
$li=mysql_fetch_row($res2);
echo "<td align=center>$li[1]</td>";
echo "<td> $ligne[3]</td>";
echo "<td align=center>$ligne[4]</td>";
echo "<td align=center>$ligne[5]</td>";
echo "<td align=center>$ligne[6]</td>";
echo "<td align=center>$ligne[7]</td>";
echo "<td align=center><a href=Detail.php?code=$ligne[0] target=_self><img src=../image/detail.jpg></a></td>";



echo "</tr>";





}

?>



</table>
</body>
</html>
