
<html>
<head>
<title>Visite technique</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/input_style.css">
<style type="text/css">

.bouton
{
background:url(img/button.gif) ;
display:inline-table;
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
	cursor:hand;
}
a.button{
	background:url(img/button.gif);
	display:block;
	color:#555555;
	font-weight:bold;
	height:30px;
	line-height:29px;
	margin-bottom:14px;
	text-decoration:none;
	width:150px;
}
a:hover.button{
	color:#0066CC;
}

/* -------------------- */
/* CLASSES				*/
/* -------------------- */
	.ajouter{
		background:url(../img/add.gif) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
	.retour{
		background:url(../img/retour.png) no-repeat 10px 8px;
		text-indent:30px;
		display:block;
	}
  [required] {
   border: 2px;
   border-style:ridge;
}
:required {
   border: 2px ;
    border-style:ridge;
}
</style>
</head>
<body marginheight="40" bgcolor="#ffffff">
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<?php
session_start();

include "../../conexion.php";
if(empty($_SESSION["id"]))
$id=$_GET["id"];
else
$id=$_SESSION["id"];
$req="select * from visite where id_visite=$id";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);
?>
<p align="center" class="style2"><strong>- Modification visite -</strong></p>
<br>
<form name="Modifier_visite" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
<table align="center" border="0">
	<tr>
		<td height="69" align="right">Date de visite :</td>
	  <td ><input type="date" name="date" value="<?php echo $ligne[3];?>" required></td>
		<td align="right">&nbsp;</td>
		
	</tr><br>
	

		<tr>
		<td height="32" align="right">Vehicule :</td>
		<td><?php 
		include "../../conexion.php";
			$requete2 = mysql_query("SELECT * FROM vehicule");
			echo "<select name='matricule'>";
		
			while($resultat2 = mysql_fetch_array($requete2))
			{	
		if($resultat2[0]==$ligne[1])
				echo "<option selected value=".$resultat2[0].">".$resultat2[0]."</option>";
			echo "<option value=\"$resultat2[0]\">$resultat2[0]</option>";
			
			}
			echo "</select>";
			?></td>
	</tr>
	</table>
<div align="center">	<input type="submit" class="bouton" value="Modifier">     
<input type="reset" class="bouton" value="Annuler">
</div>
	</form>
<?php
include "../../conexion.php";
if(!empty($_POST["matricule"]) && !empty($_POST["date"]))
{
$id=$_SESSION["id"];
$mat=$_POST["matricule"];

$date_visite=$_POST["date"];

$req2="update visite set Matricule='$mat', Datevisite='$date_visite' where id_visite=$id";
$res2=mysql_query($req2) or die(mysql_error());
if($res2)
echo "modification fait avec succée";

}
?>
</body>
</html>
