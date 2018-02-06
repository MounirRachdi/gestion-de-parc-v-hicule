<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>
<title>Modifier reparation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../css/input_style.css">
<style type="text/css">


 
</style>
<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<p align="center" class="style2"><strong>- Modifier reparation -</strong></p><br>
<?php
$ligne=mysql_fetch_row($ress);
$_SESSION['id_rep']=$ligne[0];
?>
<form name="modifier_rep" method="post" action="confirm_modif_rep.php?code=<?php echo $ligne[0];?>">
<table width="392" border="0" align="center">
	<tr>
		<td width="159" align="right">id rep:</td>
	    <td width="223"><input type="text" name="id_rep" value="<?php echo $ligne[0];?>"></td>
	</tr>
	<tr>
		<td align="right">date de reparation  :</td>
		<td><input type="date" name="date" value="<?php echo $ligne[1];?>"></td>
	</tr>
	<tr>
		<td align="right">cout de reparation  :</td>
		<td><input type="text" name="cout" value="<?php echo $ligne[2];?>"></td>
	</tr>
	<tr>
		<td align="right">Matricule :</td>
		<td>
			<input type="text" name="matricule" value="<?php echo $ligne[4];?>" required>	  </td>
	</tr>
</table>

	
<br>
<div align="center"><input id="myButton" type ="submit" value="Enregistrer" class="myButton"></div>
</form>
</body>
</html>
<?php
// deconnexion de la base
mysql_close();
?>