<?php
include "../../conexion.php";
$id=$_GET["id"];
$req="delete from assurance where id_ass=$id";
$res=mysql_query($req) or die(mysql_error());
if($res)
{
echo "<center> Suppression fait !! </center>";
include "recherche_assurance.php";

}

else
echo "erreur de suppression ";

?>