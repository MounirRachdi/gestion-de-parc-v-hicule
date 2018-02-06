<?php
include "../../conexion.php";
/*if(!empty($_POST["matricule"]) && !empty($_POST["cout"]) && !empty($_POST["date_deb"]) && !empty($_POST["date_fin"]) && !empty($_POST["cou"]))
{*/
$mat=$_POST["matricule"];
$cout=$_POST["cout"];
$date_deb=$_POST["date_deb"];
$date_fin=$_POST["date_fin"];
$req="insert into assurance (Matricule, cout_ass, Date_debut, Date_fin) values('$mat', $cout, '$date_deb', '$date_fin')";
$res=mysql_query($req) or die(mysql_error());
if($res)
//header("Refresh:0");
header("location:gestion_autre.php");
else
echo "erreur d'insertion des données";
//}

?>