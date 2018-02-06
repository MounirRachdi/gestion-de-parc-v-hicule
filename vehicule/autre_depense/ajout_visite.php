<?php
include "../../conexion.php";
$mat=$_POST["matricule"];
$ob=$_POST["observation"];
$date=$_POST["date"];
$req="INSERT INTO visite(Matricule, observation, Datevisite) values('$mat', '$ob', '$date')";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "Nouveau visite technique ajouté avec succée";
include "Ajouter_visite.php";
}
else
echo "erreur d'nsertion des donneés";


?>