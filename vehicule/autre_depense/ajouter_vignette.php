<?php
include "../../conexion.php";
$mat=$_POST["matricule"];
$cout=$_POST["cout"];
$date=$_POST["date"];
$date_fin=$_POST["date_fin"];
$req="INSERT INTO vignette(Matricule, Date_paiement, Date_fin, cout_vignette) values('$mat', '$date', '$date_fin', $cout)";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "Insertion fait avec succée";
include "Ajouter_vignette_form.php";
}
else
echo "erreur d'nsertion des donneés";


?>