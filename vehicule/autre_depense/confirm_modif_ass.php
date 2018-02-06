<?php
include "../../conexion.php";
session_start();
if(!empty($_POST["matricule"]) && !empty($_POST["cout"]) && !empty($_POST["date_deb"]) && !empty($_POST["date_fin"]))
{
$id=$_SESSION["id"];
$mat=$_POST["matricule"];
$cout=$_POST["cout"];
$date_deb=$_POST["date_deb"];
$date_fin=$_POST["date_fin"];
$req2="update assurance set Matricule='$mat', cout_ass=$cout, date_debut='$date_deb', date_fin='$date_fin' where id_ass=$id";
$res2=mysql_query($req2) or die(mysql_error());
if($res2)
echo "modification fait avec succée";
include 'liste_assurance.php';

}
?>