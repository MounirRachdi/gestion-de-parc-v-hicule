<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>suivi  consommation</title>
<link type="text/css" rel="stylesheet" href="../css/compte.css" />
<style type="text/css">
<!--
.Style1 {font-family: "Times New Roman", Times, serif}
-->
body

{
padding:100px 0 0 0 ;}
</style>
<script type="text/javascript">
function changetxt()
{
document.forms[0].carburant.value=((6.5/100)*document.forms[0].km.value)*2;

}
	</script>
	<script type="text/javascript">
function changetxt2()
{

document.forms[0].nouveau_valeur.value= (document.forms[0].compteur_final.value - document.forms[0].compteur_initial.value);

}
</script>
	<script type="text/javascript">
function verif()
{
if (document.f1.nouveau_valeur.value < (document.f1.km.value+50)) { // Cette condition renvoie « true », le code est donc exécuté
    alert('erreur');
	 document.f1.nouveau_valeur.focus();
   return false;
}
}
	</script>
</head>
<?php
include "../conexion.php";
$mat=$_POST["matricule"];
$date=$_POST['date_'];
$req="select m.id_mission, v.Matricule, m.km_approximative as kilométrage, m.Qte_carburant as carburant, m.compteur_initial as compteur_initial, id_conducteur from vehicule v , mission m where v.Matricule=m.Matricule and m.Date_fin='$date' and v.Matricule='$mat'";
$res=mysql_query($req) or die(mysql_error());
$line=mysql_fetch_row($res);
$num=mysql_num_rows($res);
if($res>0)
{
?>
<form method="post" action="newcons.php?id_mission=<?php echo $line[0];?>" onsubmit="return verif()" name="f1">
<table border="0" align="center" cellpadding="10">
<tr><td width="74">Vehicule</td>
<td width="629">
<input type="text" readonly="true" value="<?php echo $line[1];?>" name="matricule" /></td></tr><tr><td>Conducteur</td><td>
<?php
$req2="select * from conducteur where id_conducteur=$line[5]";
$res2=mysql_query($req2) or die(mysql_error());
$ligne=mysql_fetch_row($res2);
?>
<input type="hidden" name="id_cond" value="<?php echo $ligne[0];?>"  />
<input type="hidden" name="mission" value="<?php echo $line[0];?>" />
<input type="text" readonly="true" value="<?php echo $ligne[1]." ".$ligne[2];?>" name="conducteur" />
</td></tr>
<tr><td>Kilométrage approximative</td><td>
<input type="text" value="<?php echo $line[2];?>" name="km" onchange="changetxt()" />
</td></tr>
<tr><td>Carburant</td>
<td>
<input type="text" name="carburant" value="<?php echo $line[3];?>" /></td></tr>
<tr>
<tr><td>compteur initial</td>
<td>
<input type="text" name="compteur_initial" value="<?php echo $line[4];?>"  /></td>
</tr>
<tr><td>compteur final</td>
<td>
<input type="text" name="compteur_final" value="" onchange="changetxt2()" /></td>
</tr>
<tr>
  <td>Kilométrage parcouru </td>
  <td>
<input type="text" name="nouveau_valeur"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Valider" name="submit" />
</td>
</tr>
</table>

</form>
<?php }
else
echo "pas de consommation";
?>

</body>
</html>
