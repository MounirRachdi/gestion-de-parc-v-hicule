<?php
include '../conexion.php';
$id_mission=$_GET['id_mission'];
$nouveau_valeur=$_POST['nouveau_valeur'];
$matricule=$_POST['matricule'];
$carburant=$_POST['carburant'];
$conducteur=$_POST['conducteur'];
$km=$_POST['km'];
$req2="select id_conducteur, km_approximative from mission where id_mission=$id_mission";
$res1=mysql_query($req2) or die(mysql_error());
$l=mysql_fetch_row($res1);

if($nouveau_valeur>$l[1])
{$newkm=$nouveau_valeur - $l[1];
$req3="insert into punition(conducteur, km_depasser) values($l[0], $newkm)";
$res3=mysql_query($req3) or die(mysql_error());

if($res3)
echo "Modification !!!!";
else
echo "erreur";
}
?>