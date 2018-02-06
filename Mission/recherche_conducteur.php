<?php
include "../conexion.php";
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$req="select id_vehicule, objectif_miss, Km_parcourir, Qte_carburant, Date_debut, Date_fin from conducteur c, mission m where c.id_conducteur=m.id_conducteur and c.nom='$nom' and c.prenom='$prenom'";
$res=mysql_query($req) or die(mysql_error());
while($ligne=mysql_fetch_row($res))
{




}

?>