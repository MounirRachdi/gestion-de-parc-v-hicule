<?php
include"../conexion.php";
$id=$_GET["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$cin=$_POST["cin"];
$tel=$_POST["telephone"];
$vehicule=$_POST["vehicule"];
$req="update conducteur set nom='$nom', prenom='$prenom', CIN='$cin', telephone='$tel', Matricule='$vehicule' where id_conducteur=$id ";
$res=mysql_query($req) or die (mysql_error());
if($res)
{
echo "<center> modification fait avec succée</center>";
include "recherche_conducteur.php"; 

}

?>