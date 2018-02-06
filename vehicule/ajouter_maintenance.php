<?php
include "../conexion.php";
$date_deb=$_POST["date_deb"];
$date_fin=$_POST["date_fin"];
$atelier=$_POST["atelier"];
$cout=$_POST["cout"];
$vehicule=$_POST["vehicule"];

$req="insert into maintenance(date_deb, date_fin, cout_maintenance, Atelier, Matricule) values('$date_deb', '$date_fin', '$cout', '$atelier', '$vehicule')";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "<h3> Ajout avec succée</h3>";
include "ajouter_maintenance_form.php";
}
else 
echo "javascript:alert('echec d'insertion')";
?>
