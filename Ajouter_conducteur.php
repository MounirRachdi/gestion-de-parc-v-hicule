<?php
include "../conexion.php";
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$cin=$_POST["cin"];
$tel=$_POST["telephone"];
$vehicule=$_POST["vehicule"];
$req="insert into conducteur ( nom, prenom, CIN, telephone, Matricule) values('$nom', '$prenom', '$cin', '$tel', '$vehicule')";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "ajout fait avec succés";
include "ajou_conducteur_form.php";
}
else
echo "failed";



?>
