<?php

include "../conexion.php";
$req="select * from conducteur";
$resultat = mysql_query($req) or die(mysql_error());
?>
<html>
<head>
<script language="Javascript" >
function imprimer(){window.print();}

    function confirmation(id)
    {
      
        if (confirm('Êtes-vous sur de vouloir supprimer ?'))
        {
            document.write("<meta http-equiv='refresh' content='0; url='supprimer_conducteur.php?code=id'>");
        }
        else
        {
            
			window.location("liste_conducteur.php");
        }
    }
</script>
<style type="text/css">
tr:hover{


background-image:url(../image/fond2.png);}
.style2 {
	color: #000066;
	font-family: "Baskerville Old Face";
	font-size: 24px;
	
}


</style>
</head>
<body>
<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer"><br><br>
<center><span class="style2"><strong><font face="Comic Sans MS">Liste des Conducteurs</font></strong><br>
</span></center><br>
<TABLE border="1" align="center" class="tableau"   >
    <tr class="style3" >
		<th width="100" align="center">Nom</th>
		<th width="100" align="center">Prenom</th>
		<th width="100" align="center">N° CIN</th>
		<th width="100" align="center">Telephone</th>
		<th width="100" align="center">NB_heurs du travail</th>
		<th width="100" align="center">Km_parcourir</th>
		<th width="100" align="center">Vehicule</th>
		
		<th width="100" align="center">Modification</th>
		<th width="100" align="center">Suppression</th>
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
		if( !empty($row[6]) )
		echo "<td align=\"center\">$row[6]</td>";
		else
		echo "<td align=\"center\">---</td>";
		
		$requete1 = "select * from vehicule where id_vehicule='".$row[7]."'";
	$resultat1 = mysql_query($requete1) or die(mysql_error());
	$row1 = mysql_fetch_row($resultat1);
		if( !empty($row1[1]) )
		echo "<td align=\"center\">$row1[1]</td>";
		else
		echo "<td align=\"center\">---</td>";
		
	echo "<td align=\"center\"><a href=modifier_conducteur.php?code=$row[0] target=_self><img src=../image/modif.png></a></td>";
echo "<td align='center'><a href=supprimer_conducteur.php?id=$row[0] target=_self ><img src=../image/supp.png></a></td>";
	echo "<tr>";
}
?>
</TABLE>
</body>
</html>



