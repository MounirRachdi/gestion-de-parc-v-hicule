<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include "../conexion.php";
$mat=$_POST["matricule"];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Resultat de recherche</title>
<link rel="stylesheet" type="text/css" href="../css/tableau.css" />
<style type="text/css">

tr:hover{
background-image:url(../image/fond2.png);
border-bottom:none;


}
.style2 {
	color: #000066;
	font-family: "Baskerville Old Face";
	font-size: 24px;
}</style>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<center><span class=style2>-- liste des maintenances pour la vehicule <?php echo $mat ?> --</span></center><br><br><br><br>;
<TABLE border="1" align="center" class="tableau"   >
    <tr class="style3" >
		<th width="100" align="center">Date debut </th>
		<th width="100" align="center">Date fin </th>
		<th width="100" align="center">cout de maintenance</th>
		<th width="100" align="center">Atelier</th>
		<th width="100" align="center">Vehicule</th>
		<th width="100" align="center">Modifier</th>
		<th width="100" align="center">Supprimer</th>
	
		
		
	</tr><?php
$req="select id, m.date_deb, m.date_fin, m.cout_maintenance, m.Atelier, v.Matricule from maintenance m, vehicule v where v.Matricule=m.Matricule and v.Matricule='$mat'";

$res=mysql_query($req) or die(mysql_error());
while ($row=mysql_fetch_row($res))
{
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
          if( !empty($row[5]) )
		echo "<td align=\"center\">$row[5]</td>";
		else
		echo "<td align=\"center\">---</td>";
		echo "<td align=center><a href=modifier_reparation.php?id=$row[0]><img src=img/modifier.png ></a></td>";
		echo "<td align=center><a href=supprimer_maintenance.php?id=$row[0] ><img src=img/supp.png ></a></td>";
		echo "</tr>";
}


?>

</TABLE>
</body>
</html>
