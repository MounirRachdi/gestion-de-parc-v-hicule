
<html>
<head>
<title>Visite</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/input_style.css">
<style type="text/css">

.bouton
{
background:url(../img/button.gif) ;
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
	background:url(../img/button.gif);
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
include"../../conexion.php";
session_start();
if(empty($_SESSION["id"]))
$id=$_GET["id"];
else
$id=$_SESSION["id"];
//$mat=$_POST["matricule"];
$req="select * FROM vignette where id_vignette=$id";
$res=mysql_query($req) or die(mysql_error());
$ligne=mysql_fetch_row($res);
/*session_start();
$_SESSION["id_vignette"]=$ligne[0];*/
?>


<p align="center" class="style2"><strong>- Modifier vignette -</strong></p><br>
<form name="ajout_assurance" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
<table align="center" border="0">
	<tr>
		<td height="69" align="right">Date de paiement :</td>
	  <td ><input type="date" name="date" value="<?php echo $ligne[2]; ?>" required></td>
		<td align="right">Date fin
	    </td>
		<td><input type="date" name="date_fin" required></td>
	</tr>
	
	<tr>
		<td height="46" align="right">cout de vignette </td>
		<td><input type="text" name="cout" value="<?php echo $ligne[3]; ?>" required></td>
		
	
		
		<td height="32" align="right">Vehicule :</td>
		<td><?php 
		//include "../../conexion.php";
			$requete2 = mysql_query("SELECT * FROM vehicule");
			echo "<select name='matricule'>";
			while($resultat2 = mysql_fetch_array($requete2))
				echo "<option value=\"$resultat2[0]\">$resultat2[0]</option>";
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
if(!empty($_POST["matricule"]) && !empty($_POST["date"]) && !empty($_POST["date_fin"] && !empty($_POST["cout"]))
{
$id=$_SESSION["id_vignette"];
$mat=$_POST["matricule"];
$date_paiement=$_POST["date"];
$date_fin=$_POST["date_fin"];
$cout=$_POST["cout"];
$req2="update vignette set Matricule='$mat', Date_paiement='$date_paiement', Date_fin='$date_fin', cout_vignette=$cout where id_vignette=$id";
$res2=mysql_query($req2) or die(mysql_error());
if($res2)
echo "modification fait avec succée";

}
?>
</body>
</html>
