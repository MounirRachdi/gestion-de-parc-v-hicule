<?php
include "../conexion.php";
$code=$_GET["code"];
$id_rep=$_POST["id_rep"];

$cout_rep=$_POST["cout_rep"];
$matricule=$_POST["Matricule"];

session_start();
$_SESSION["mat"]=$code;
$req="update reparation set id_rep='$id_rep', cout_rep='$cout_rep', Matricule='$matricule', model='$model', id_statut='$statut', Km_parcourir='$km', Date_acquisition='$dateacquisition' where id_rep='$code'";
$res=mysql_query($req) or die(mysql_error());
if($res)
header('resulta_recherche_rep.php');
else
echo "erreur dans la modification";
?>
