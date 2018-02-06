
<?php
include "../conexion.php";
$code=$_GET["code"];
$req="delete from vehicule where Matricule='$code'";
$res=mysql_query($req) or die(mysql_error());
if($res)
header("location:recherche_vehicule.php");
else
echo $res;

?>


