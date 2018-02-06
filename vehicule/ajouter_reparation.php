<?php
include "../conexion.php";
$date_deb=$_POST["date"];
$cout=$_POST["cout"];
$vehicule=$_POST["vehicule"];

$req="insert into reparation(date, cout_rep, Matricule) values('$date_deb', $cout, '$vehicule')";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "<h3> Ajout avec succée</h3>";
include "ajouter_reparation_form.php";
}
else 
echo "javascript:alert('echec d'insertion')";
?>
