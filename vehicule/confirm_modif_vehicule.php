<?php
include "../conexion.php";
$code=$_GET["code"];
$matricule=$_POST["matricule"];
$statut=$_POST["statut"];
$puissance=$_POST["puissance"];
$nbrplace=$_POST["nbrplace"];
$model=$_POST["model"];
$dateacquisition=$_POST["date"];
//$service=$_POST["service"];
$carte=$_POST["cartegrise"];
$km=$_POST["km"];
session_start();
$_SESSION["mat"]=$code;
$req="update vehicule set Puissance=$puissance, carte_grise=$carte, Nb_place=$nbrplace, model='$model', id_statut=$statut, Km_parcourir='$km', Date_acquisition='$dateacquisition' where Matricule='$code'";
$res=mysql_query($req) or die(mysql_error());
if($res)
header('Location:resulta_recherche.php');
else
echo "erreur dans la modification";
?>