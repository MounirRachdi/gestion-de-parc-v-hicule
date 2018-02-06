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

<center><span class=style2>-- liste des reparation pour la vehicule <?php echo $mat ?> --</span></center><br><br><br><br>;
<TABLE border="1" align="center" class="tableau"   >
    <tr class="style3" >
		<th width="100" align="center">Date de reparation</th>
		
		<th width="100" align="center">cout de reparation</th>
	
		<th width="100" align="center">Vehicule</th>
		<th width="100" align="center">Modifier</th>
		<th width="100" align="center">Supprimer</th>
	
		
		
	</tr><?php
$req="select id_rep, rep.date, rep.cout_rep, v.Matricule from reparation rep, vehicule v where v.Matricule=rep.Matricule and v.Matricule='$mat'";

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
		
		echo "<td align=center><a href=modifier_rep.php?id=$row[0]><img src=img/modifier.png ></a></td>";
		echo "<td align=center><a href=supprimer_reparation.php?id=$row[0] ><img src=img/supp.png ></a></td>";
		echo "</tr>";
}


?>

</TABLE>
</body>
</html>
