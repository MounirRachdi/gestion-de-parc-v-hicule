<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modification </title>
</head>

<body>
<?php
include "../conexion.php";
session_start();
$id=$_GET["id"];
$conducteur=$_POST["conducteur"];
$vehicule=$_POST["vehicule"];
$object=$_POST["object"];
$km=$_POST["km"];
$type_car=$_POST["type_carburant"];
$Qte_car=$_POST["carburant"];
$date_deb=$_POST["date_deb"];
$date_fin=$_POST["date_fin"];

$req="update mission set id_conducteur=$conducteur, Matricule='$vehicule', objectif_miss='$object', Km_parcourir=$km, type_carburant='$type_car', Qte_carburant=$Qte_car, Date_debut='$date_deb', Date_fin='$date_fin' where id_mission=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "Modification fait avec succés ";
include "recherche_mission.php";
}


?>
</body>
</html>
