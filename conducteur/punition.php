<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Punition</title>
</head>

<body>
<div align="right"><a href="javascript:history.back()">Retour</a>
</div>

<div align="center"><font color="#2A1FAA" size="7" face="Mistral"><b><span class="style">&nbsp <font face="Times New Roman, Times, serif">Gérer punition conducteur</font> &nbsp </span></b></font></div>
<br>
<div align="center">
<form name="form" action="punition.php" method="post" >
  <div align="center">
  <select name="conducteur">
    <?php
include "../conexion.php";
$req="select * from conducteur ";
$res=mysql_query($req) or die(mysql_error());
while($ligne=mysql_fetch_row($res))
{
?>
    <option value="<?php echo $ligne[0]?>"><?php echo $ligne[1]." ".$ligne[1]?></option>
    <?php
}?>
  </select>
  <br>
  <br>
  <br>
  <input name="submit" type='submit' align="center" value='voir punition' />
  <br>
  <br>
  <br>
  <br>
  </div>
</form>
<?php
include "../conexion.php";
if(!empty($_POST['conducteur']))
{
$cond =$_POST['conducteur'];
$req1="select * from punition p, conducteur c where p.conducteur=c.id_conducteur and c.id_conducteur=$cond";
$res1=mysql_query($req1) or die(mysql_error());
$num=mysql_num_rows($res1);
$line=mysql_fetch_row($res1);
$req2="select nom, prenom from conducteur where id_conducteur=$cond";
$res2=mysql_query($req2) or die(mysql_error());
$li=mysql_fetch_row($res2);
if($num>0)
{
echo "Conducteur : ".$li[0] ."  ".$li[1]."<br><br>";
echo $line[2]." km depasseé ";
}
else
{
echo " 0 km depasseé"; 
}
}
?>
</body>
</html>
