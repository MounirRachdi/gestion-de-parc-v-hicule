<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<?php
include "../conexion.php";
//récupérer les données du formulaire
$matricule=$_POST["matricule"];
$statut=$_POST["statut"];
$puissance=$_POST["puissance"];
$nbrplace=$_POST["nbrplace"];
$model=$_POST["model"];
$carburant=$_POST["carburant"];
$dateacquisition=$_POST["date"];

//$service=$_POST["service"];
$carte=$_POST["cartegrise"];
$modele=$_POST["model"];
$km=$_POST["km"];
if(empty($matricule) || empty($statut) || empty($puissance))
{
?>
<script type='text/javascript'> 

if(confirm('des champ sant vide ! verifier matricule'))
window.location='ajouter_vehicule_form.php';

</script>
<?php }
else{
$requete = "INSERT INTO vehicule(`Matricule`, `Puissance`, `carte_grise`, `Nb_place`, `model`, `id_statut`, `km_parcourir`, `Date_acquisition`,`type_carburant`) VALUES('$matricule', $puissance, '$carte', $nbrplace, '$model', $statut, $km, '$dateacquisition','$carburant')";

$resultat = mysql_query($requete) or die(mysql_error());//"erreur dans la requete : " . $requete);
// bouton de retour
if( $resultat )
{echo "<center>ajout fait avec succée</center>";
include "ajouter_vehicule_form.php";

}
else
	echo "<span class=\"style3\"><b>Désolé problème lors de l'ajout</b></span>";
echo "<form><br>";
echo "<input type='button' value=\"Retour\" onclick=\"window.location='ajouter_vehicule_form.php';\">";
echo "</form>";
}
mysql_close();
?>
</body>
</html>
