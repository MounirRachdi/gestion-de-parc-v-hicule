<?php
include "../conexion.php";
$cin=$_POST["cin"];

$mat=$_POST["Matricule"];
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
<div align="right"><a href="JavaScript:history.back()" class="Style4" ><strong>Retour</strong></a></div><br>
<center>
<span class="style2"><strong><font face="Comic Sans MS">Liste des missions de <?php echo $cin."  pour véhicule  ".$mat;?> </font></strong>
</span></center><br><br />
<table align="center" border="1">
 <tr class="style3" >
		<th width="100" align="center">Nom du conducteur</th>
	
		<th width="100" align="center">Vehicule</th>
		<th width="100" align="center">Objectif</th>
		<th width="100" align="center">Km_parcourir</th>
		<th width="100" align="center">Type carburant</th>
		<th width="100" align="center">Quantité du carburant</th>
		<th width="100" align="center">Date de debut</th>
		<th width="100" align="center">Date du fin</th>
		<th width="100" align="center">Modifier</th>
		<th width="100" align="center">Supprimer</th>
		
	</tr>

<?php
$req=" select m.id_mission, m.id_conducteur, m.Matricule, m.objectif_miss, m.Km_approximative, v.type_carburant, m.Qte_carburant, m.Date_debut, m.Date_fin from mission m, conducteur c, vehicule v where c.id_conducteur=m.id_conducteur and m.Matricule=v.Matricule and v.Matricule='$mat' and c.CIN='$cin' and Date_debut>CURDATE() ";
$res=mysql_query($req) or die(mysql_error());
while($ligne=mysql_fetch_row($res))
{
echo "<tr>";
$req1="select c.nom , c.prenom from conducteur c, mission m where c.id_conducteur=m.id_conducteur and c.id_conducteur=$ligne[1]";
$res1=mysql_query($req1)or die(mysql_error());
$lig=mysql_fetch_row($res1) ;

echo "<td align=center> $lig[0] ".$lig[1]."</td>";
$req2="select v.Matricule from vehicule v, mission m where v.Matricule=m.Matricule and v.Matricule='$ligne[2]'";
$res2=mysql_query($req2) or die(mysql_error());
$li=mysql_fetch_row($res2);
echo "<td align=center>$li[0]</td>";
echo "<td>".$ligne[3]."</td>";
echo "<td>".$ligne[4]."</td>";
echo "<td>".$ligne[5]."</td>";
echo "<td>".$ligne[6]."</td>";
echo "<td>".$ligne[7]."</td>";
echo "<td>".$ligne[8]."</td>";
echo "<td align=center><a href=modifier_mission.php?id=$ligne[0]><img src=../image/modifier.png ></a></td>";
		echo "<td align=center><a href=supprimer_mission.php?id=$ligne[0] ><img src=../image/supp.png ></a></td>";
echo"</tr>";
}


?>
</table>