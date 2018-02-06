<?php
include ("../conexion.php");
?>
<html>
<head>
<title>Liste des logiciels</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="..css/tableau.css" rel="stylesheet" type="text/css">
<script language="Javascript" >
function imprimer(){window.print();}


    function confirmation(code)
    {
      
        if (confirm('Êtes-vous sur de vouloir supprimer ?'))
        {

            document.location.href='supprimer_vehicule.php?id=code';
        }
        else
        {
            
			window.location("liste_vehicule.php");
        }
    }

</script>
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
<body marginheight="20">

<div align="right"><a href="JavaScript:history.back()" class="Style4" ><strong>Retour</strong></a></div><br>
<?php
//requête de travail
$requete = "select * from vehicule;";	
$resultat = mysql_query($requete) or die(mysql_error());
?>
<div align="center">
<span class="style2"><strong><font face="Comic Sans MS">Liste des vehicules</font></strong><br>
</span><br>
<TABLE border="1" align="center" class="tableau"   >
    <tr class="style3" >
		<th width="100" align="center">Matricule</th>
		<th width="100" align="center">Puissance</th>
		<th width="100" align="center">Type_carburant</th>
		<th width="100" align="center">Carte grise</th>
		<th width="100" align="center">Nombre de place</th>
		<th width="100" align="center">Model</th>
		<th width="100" align="center">Statut</th>
		<th width="100" align="center">Km_parcourir</th>
		<th width="100" align="center">Date dacquisition</th>
		<th width="100" align="center">Detail</th>
		
		
	</tr>

<?php
while ($row=mysql_fetch_row($resultat))
{
	echo "<tr>";
	
	if( !empty($row[1]) )
		echo "<td align=\"center\">$row[1]</td>";
	else
		echo "<td align=\"center\">---</td>";
	if( !empty($row[2]) )
		echo "<td align=\"center\">$row[2]</td>";
	else
		echo "<td align=\"center\">---</td>";
	$req3="select * from type_carburant where id_carburant=$row[9]";
		
		$res3=mysql_query($req3) or die(mysql_error());
		$li=mysql_fetch_row($res3);
		echo "<td align=\"center\">$li[1]</td>";
	if( !empty($row[3]) )
		echo "<td align=\"center\">$row[3]</td>";
	else
		echo "<td align=\"center\">---</td>";
		if( !empty($row[4]) )
		echo "<td align=\"center\">$row[4]</td>";
		else
		echo "<td align=\"center\">---</td>";
		$requete1 = "select * from model where id_model='".$row[5]."'";
	$resultat1 = mysql_query($requete1) or die(mysql_error());
	$row1 = mysql_fetch_row($resultat1);
		if( !empty($row1[1]) )
		echo "<td align=\"center\">$row1[1]</td>";
		else
		echo "<td align=\"center\">---</td>";
		$req1 = "select * from statut where id_statut='".$row[6]."'";
	$result = mysql_query($req1) or die(mysql_error());
	$row2 = mysql_fetch_row($result);
		if( !empty($row2[1]) )
		echo "<td align=\"center\">$row2[1]</td>";
		else
		echo "<td align=\"center\">---</td>";
		if( !empty($row[7]) )
		echo "<td align=\"center\">$row[7]</td>";
		else
		echo "<td align=\"center\">---</td>";
		if( !empty($row[8]) )
		echo "<td align=\"center\">$row[8]</td>";
		else
		echo "<td align=\"center\">---</td>";
		echo "<td align=\"center\"><a href=detail_vehicule.php?code=$row[0] target=_self><img src=../image/detail.jpg></a></td>";
	


?>
<?php	echo "<tr>";
}
?>
	</tr>
</table></div><br><br>
<div align="right">
<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer cette page"></div>

</body>
</html>