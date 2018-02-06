<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>

<link href="../css/compte.css" type="text/css" rel="stylesheet"  />
<style type="text/css">
<!--
.Style1 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
<body>


<div align="center"><font color="#2A1FAA" size="7"><b><span class="style Style1">&nbsp Gestion des véhicules &nbsp</span></b></font> </div>
<br>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<p align="center" class="style2"><strong>- Suivi consommation -</strong></p>

<form method="POST" action="suivi_cons.php">
			<table align="center">
				<tr>
					<td width="59" align="center" class="style4"> </td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td align="right">
					Vehicule :</td> <td width="598">
					<select name="matricule" >
					<?php include '../conexion.php';
					$req="select * from vehicule";
					$result=mysql_query($req) or die(mysql_error());
					while($line=mysql_fetch_row($result))
					{
					
					?>
				<option value="<?php echo $line[0];?>"><?php echo $line[0];?></option>
				<?php
				}
				?>
					</select>
					</td>
				</tr>
				<tr><td>Date</td>
				  <td>
				  <input type="date" name="date_"  />
				  </td>
				</tr>
				<tr>
					<td colspan="2"  align="center">
					<input type="submit" name="Envoyer" value="Rechercher">
					</td>
				</tr>
				<tr><td><br></td></tr>
			</table>
</form>
</body>
</html>
