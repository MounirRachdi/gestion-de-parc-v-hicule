<?php
include "../conexion.php";
$id_conducteur=$_POST["id_conducteur"];
$Matricule=$_POST["Matricule"];
$objectif_miss=$_POST["objectif_miss"];
$km_approximative=$_POST["km_approximative"];
$Qte_carburant=$_POST["Qte_carburant"];
$Date_debut=$_POST["Date_debut"];
$Date_fin=$_POST["Date_fin"];
$compteur_initial=$_POST["compteur_initial"];
$req=" insert into mission(`id_conducteur`, `Matricule`, `objectif_miss`, `Km_approximative`, `Qte_carburant`, `Date_debut`, `Date_fin` , `compteur_initial`) values('$id_conducteur', '$Matricule', '$objectif_miss', '$km_approximative', '$Qte_carburant', '$Date_debut', '$Date_fin', '$compteur_initial')";

$res=mysql_query($req) or die( mysql_error());
$req3="SELECT max(id_mission) as maxmiss FROM mission";
$res3=mysql_query($req3);
$li=mysql_fetch_row($res3);
$max=$li[0];
$trigger=" insert into pointage(`id_conducteur`, `id_mission`, `Date_debut`, `Date_fin`)values('$id_conducteur', '$max', '$Date_debut', '$Date_fin')";
$execute=mysql_query($trigger) or die(mysql_error());
if($res)
{

echo "<center>ajout fait avec succées</center>";
include "ajout_mission.php";
}



?>