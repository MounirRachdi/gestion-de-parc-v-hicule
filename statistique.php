<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/compte.css" />
<title>Rapport</title>

<style type="text/css">
<!--
.Style1 {
	color: #0033FF;
	font-family: Arial, Helvetica, sans-serif;
}
input[type='submit'], input[type='reset']
{
background:url(image/button.gif);
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
	cursor:hand;
}
-->
</style>
<script type="text/javascript">

function blink(ob) 
{ 
if (ob.style.visibility == "visible" ) 
{ 
ob.style.visibility = "hidden"; 
} 
else 
{ 
ob.style.visibility = "visible"; 
} 
} 

//ob.style.visibility = "visible";
/*else
ob.style.visibility = "visible";*/

</script>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<center>
  <h2><span class="Style1">Sélectionnez les statistiques à visualiser</span>    </h2>
</center><br /><br />
<form name="f" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<center>
<div align="center" style="width:30%">
<select name="choix" id="choix" onchange="this.form.submit();">
<option >Selectionner un choix</option>
<option value="1">Vehicule</option>
<option value="2">Conducteur</option>

</select></div></center>
<br /><br /><br /><br /><br />
</form>
<?php
if(!empty($_POST["choix"]))
{$choix=$_POST["choix"];
if($choix==1)
{?>

<script type="text/javascript">
function visibilite(thingId) 
{
	var targetElement;targetElement = document.getElementById(thingId) ;
	if (targetElement.style.display == "none")
	{targetElement.style.display = "" ;} 
	else {targetElement.style.display = "none" ;}
}

</script>
<center><strong>Statistique de vehicule</strong></center>
<form method="post" action="rapport_vehicule.php">
<table width="50%" border="0" align="center">
<tr><td width="126">Matricule de vehicule</td>
<td ><input type="text" name="matricule" required/>
</td><td> <input type="text" name="annee" placeholder="Enter l'anneé" required /></td>
</tr><tr><td height="55">
choisir le periode </td>
<td width="129">
<select name="periode">
<option >choisir periode</option>
<option value="1" >par 6 mois</option>

</select> </td>
<td width="164" > 
<a href="javascript:visibilite('opta');" style="color:#000000; font-family:Arial, Helvetica, sans-serif">Par mois</a>
<div id="opta" style="display:none;">
<select name="mois" id="mois">
<option>Choisir un mois</option>
<option value="1" >Janvier</option>
<option value="2">Février</option>
<option value="3">Mars</option>
<option value="4">Avril</option>
<option value="5">Mai</option>
<option value="6">Juin</option>
<option value="7">Juillet</option>
<option value="8">Aout</option>
<option value="9">Septembre</option>
<option value="10">Octobre</option>
<option value="11">Novembre</option>
<option value="12">décembre</option>
</select></div>
</td>
</tr>
<tr><td height="74" colspan="3" align="center">
<input type="submit" value="Afficher le rapport"  />
</td></tr>
</table>
</form>
<?php
}
else if($choix==2)
{
?>
<center><strong>Statistique de conducteur</strong></center>
<script type="text/javascript">
function visibilite(thingId) 
{
	var targetElement;targetElement = document.getElementById(thingId) ;
	if (targetElement.style.display == "none")
	{targetElement.style.display = "" ;} 
	else {targetElement.style.display = "none" ;}
}

</script>
<form method="post" action="rapport_conducteur.php">
<table align="center" border="0" width="50%">
<tr><td width="126" height="35">Numero de CIN du conducteur</td>
<td colspan="2"><input type="text" name="conducteur" required /></td></tr><tr>
<td height="53">
choisir le periode </td>
<td width="129"><select name="periode">
<option >choisir periode</option>

<option value="1" >par 6 mois</option>
<option value="2" >par anneé</option>
</select>
</td>
<td width="164" > 
<a href="javascript:visibilite('opta');" style="color:#000000; font-family:Arial, Helvetica, sans-serif">Par mois</a>
<div id="opta" style="display:none;">
<select name="mois" id="mois">
<option>Choisir un mois</option>
<option value="1" >Janvier</option>
<option value="2">Février</option>
<option value="3">Mars</option>
<option value="4">Avril</option>
<option value="5">Mai</option>
<option value="6">Juin</option>
<option value="7">Juillet</option>
<option value="8">Aout</option>
<option value="9">Septembre</option>
<option value="10">Octobre</option>
<option value="11">Novembre</option>
<option value="12">décembre</option>
</select></div>
</td>
</tr>
<tr><td height="81" colspan="3" align="center">
<input name="submit" type="submit" value="Afficher le rapport"  /></td>
</tr>
</table>
</form>
<?php

}



}
?>
</body>
</html>
