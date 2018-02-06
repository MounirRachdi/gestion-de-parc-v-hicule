<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/compte.css" type="text/css" rel="stylesheet" />
<title>Rapport</title>
<script language="Javascript" >
function imprimer(){window.print();}

</script>
<style type="text/css">
.mat
{
color:#FF0000;
font-family:"Times New Roman", Times, serif;
font-size:24px;}
.table
{
font-size:20px;
}
td
{
text-align:center;}
.Style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 18px;
}
tr th
{
background:#999999;}
</style>
</head><body><div align="right"><a href="javascript:history.back()">Retour</a>
</div>



<?php
include "conexion.php";
require("pdf/fpdf.php");
$mat=$_POST["matricule"];
$choix=$_POST["periode"];
$mois=$_POST["mois"];
$annee=$_POST["annee"];
/*and MONTH(m.Date_fin) between MONTH(DATE_SUB(CURDATE(), INTERVAL 4 MONTH)) and MONTH(CURDATE())*/
//{
if($choix==1)
{



$reqmaint="select v.Matricule, m.cout_maintenance, m.date_fin from vehicule v, maintenance m where v.Matricule=m.Matricule and MONTH(m.date_fin) between 0 and 6 and year(m.date_fin)='$annee' and v.Matricule='$mat'";
$resmaint=mysql_query($reqmaint) or die(mysql_error());
$req="select v.Matricule, c.nom, c.prenom, Qte_carburant, m.Km_approximative, m.Date_fin from vehicule v, mission m, conducteur c where v.Matricule=m.Matricule and c.id_conducteur=m.id_conducteur and month(m.Date_fin) between 0 and 6 and year(m.Date_fin)='$annee' and v.Matricule='$mat' order by m.Date_fin";
$reqrep="select v.Matricule, r.cout_rep, r.date from vehicule v, reparation r where v.Matricule=r.Matricule and MONTH(r.date) between 0 and 6 and year(r.date)=$annee and v.Matricule='$mat' order by r.date";
$resrep=mysql_query($reqrep) or die(mysql_error());
$rep=mysql_num_rows($resrep);
$resmiss=mysql_query($req)or die(mysql_error());
$i=mysql_num_rows($resmiss);
$rep=0;

/*$maintenance=mysql_fetch_row($resmaint);
$vignette=mysql_fetch_row($resvig);
$visite=mysql_fetch_row($resvisite);
$Mat = mysql_result($resmiss, 0);*/
?>
<center><h1>
Rapport du vehicule <?php echo $mat?> pour les 6 premiers mois</h1></center><br /><br />
<center>
kilometrage et Consomation carburant du vehicule </center><br /><br />
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Conducteur</th>
<th>Carburant</th>
<th>kilometrage</th>
<th>Date de consommation</th></tr>
<?php
$km=0;
$car=0;
while($ligne=mysql_fetch_row($resmiss))
{
?>


<tr >

<!--<td width="101" align="center"><?php //echo $ligne[0]; ?> </td>-->


<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $ligne[1]." ".$ligne[2]?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $ligne[4]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $ligne[3];?> </td>

<td align="center" style="border-top:none; border-bottom:none; border-right:none"> <?php echo $ligne[5]; ?></td></tr>



<?php
$km+=$ligne[3];
$car+=$ligne[4];
}
?>
<tr> <td align="center" style=" border-bottom:none; border-right:none; border-left:none;"><strong>Totale</strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php  echo $car?></strong></td><td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php echo $km ?></strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $i?> Missions </span>
</center>
<br /><br /><br /><center>
Reparation et cout de reparation du vehicule </center><br /><br />
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Vehicule</th>
<th>Cout reparation</th>
<th>Date de reparation</th>
</tr>
<?php
$cout=0;
$rep=mysql_num_rows($resrep);
while($ligne=mysql_fetch_row($resrep))
{
?>


<tr >


<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $ligne[0];?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $ligne[1]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $ligne[2];?> </td>




<?php
$cout+=$ligne[1];
}
?>
<tr> <td align="center" style=" border-bottom:none; border-right:none; border-left:none;"><strong>Totale</strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php  echo $cout?></strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $rep?> Reparations </span>
</center>
<br /><br /><br /><center>
Reparation et cout de maintenance du vehicule </h1></center><br /><br />
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Vehicule</th>
<th>Cout maintenance</th>
<th>Date de maintenance</th>
</tr>
<?php
$cout_m=0;
$main=mysql_num_rows($resmaint);
while($l=mysql_fetch_row($resmaint))
{
?>


<tr >


<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $l[0];?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $l[1]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $l[2];?> </td>




<?php
$cout_m+=$l[1];
}
?>
<tr> <td align="center" style=" border-bottom:none; border-right:none; border-left:none;"><strong>Totale</strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php  echo $cout_m?></strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $main?> Maintenance </span>
</center>
<?php

?>

<?php


}
else if(!empty($mois))
{

$reqmaint="select v.Matricule, m.cout_maintenance, m.date_fin from vehicule v, maintenance m where v.Matricule=m.Matricule and MONTH(m.date_fin)='$mois' and year(m.date_fin)='$annee' and v.Matricule='$mat'";
$resmaint=mysql_query($reqmaint) or die(mysql_error());
$req="select v.Matricule, c.nom, c.prenom, Qte_carburant, m.Km_approximative, m.Date_fin from vehicule v, mission m, conducteur c where v.Matricule=m.Matricule and c.id_conducteur=m.id_conducteur and month(m.Date_fin)='$mois' and year(m.Date_fin)='$annee' and v.Matricule='$mat' order by m.Date_fin";
$reqrep="select v.Matricule, r.cout_rep, r.date from vehicule v, reparation r where v.Matricule=r.Matricule and MONTH(r.date)='$mois' and year(r.date)=$annee and v.Matricule='$mat' order by r.date";
$resrep=mysql_query($reqrep) or die(mysql_error());
$rep=mysql_num_rows($resrep);
$resmiss=mysql_query($req)or die(mysql_error());
$i=mysql_num_rows($resmiss);
$rep=0;

/*$maintenance=mysql_fetch_row($resmaint);
$vignette=mysql_fetch_row($resvig);
$visite=mysql_fetch_row($resvisite);
$Mat = mysql_result($resmiss, 0);*/
?>
<center><h1>
Rapport du vehicule <?php echo $mat?> pour le mois <?php echo $mois?></h1></center><br /><br />
<center>
kilometrage et Consomation carburant du vehicule </center><br /><br />
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Conducteur</th>
<th>Carburant</th>
<th>kilometrage</th>
<th>Date de consommation</th></tr>
<?php
$km=0;
$car=0;
while($ligne=mysql_fetch_row($resmiss))
{
?>


<tr >

<!--<td width="101" align="center"><?php //echo $ligne[0]; ?> </td>-->


<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $ligne[1]." ".$ligne[2]?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $ligne[4]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $ligne[3];?> </td>

<td align="center" style="border-top:none; border-bottom:none; border-right:none"> <?php echo $ligne[5]; ?></td></tr>



<?php
$km+=$ligne[3];
$car+=$ligne[4];
}
?>
<tr> <td align="center" style=" border-bottom:none; border-right:none; border-left:none;"><strong>Totale</strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php  echo $car?></strong></td><td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php echo $km ?></strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $i?> Missions </span>
</center>
<br /><br /><br /><center>
Reparation et cout de reparation du vehicule </center><br /><br />
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Vehicule</th>
<th>Cout reparation</th>
<th>Date de reparation</th>
</tr>
<?php
$cout=0;
$rep=mysql_num_rows($resrep);
while($ligne=mysql_fetch_row($resrep))
{
?>


<tr >


<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $ligne[0];?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $ligne[1]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $ligne[2];?> </td>




<?php
$cout+=$ligne[1];
}
?>
<tr> <td align="center" style=" border-bottom:none; border-right:none; border-left:none;"><strong>Totale</strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php  echo $cout?></strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $rep?> Reparations </span>
</center>
<br /><br /><br /><center>
Reparation et cout de maintenance du vehicule </h1></center><br /><br />
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Vehicule</th>
<th>Cout maintenance</th>
<th>Date de maintenance</th>
</tr>
<?php
$cout_m=0;
$main=mysql_num_rows($resmaint);
while($l=mysql_fetch_row($resmaint))
{
?>


<tr >


<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $l[0];?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $l[1]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $l[2];?> </td>




<?php
$cout_m+=$l[1];
}
?>
<tr> <td align="center" style=" border-bottom:none; border-right:none; border-left:none;"><strong>Totale</strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"><strong><?php  echo $cout_m?></strong></td>
<td style=" border-bottom:none; border-right:none; border-left:none;"></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $main?> Maintenance </span>
</center>
<?php

}

else 

{
$req="select v.Matricule, c.nom, c.prenom, Qte_carburant, m.Km_approximative, m.Date_fin, year(m.Date_fin) from vehicule v, mission m, conducteur c where v.Matricule=m.Matricule and c.id_conducteur=m.id_conducteur and year(m.Date_fin)='$annee' and v.Matricule='$mat' order by m.Date_fin";
$reqrep="select v.Matricule, r.cout_rep, r.date from vehicule v, reparation r where v.Matricule=r.Matricule and year(r.date) ='$annee' and v.Matricule='$mat' order by r.date";
$reqmaint="select count(m.id) as nbrmaintenance from vehicule v, maintenance m where v.Matricule=m.Matricule and year(m.date_fin) =year(curdate()) and v.Matricule='$mat'";
$reqvig="select count(vig.id_vignette) as nbrvignette from vehicule v, vignette vig where v.Matricule=vig.Matricule and year(vig.Date_fin) =year(curdate()) and v.Matricule='$mat'";
$reqvisite="select count(visite.id_visite) as nbrvisiteas  from vehicule v, visite visite where v.Matricule=visite.Matricule and year(visite.Datevisite) =year(curdate()) and v.Matricule='$mat'";

$resmiss=mysql_query($req)or die(mysql_error());
$resrep=mysql_query($reqrep) or die(mysql_error());
$resmaint=mysql_query($reqmaint) or die(mysql_error());
$resvig=mysql_query($reqvig) or die(mysql_error());
$resvisite=mysql_query($reqvisite) or die(mysql_error());
//$Mat = mysql_result($resmiss, 0);
$i=mysql_num_rows($resmiss);
?>
<center>
<h1>Kilometrage parcourir et Consomation carburant du vehicule <?php echo $mat ?> pour l'anneé <?php echo $annee?> </h1></center>

<?php

//$reparation=mysql_fetch_row($resrep);
$maintenance=mysql_fetch_row($resmaint);
$vignette=mysql_fetch_row($resvig);
$visite=mysql_fetch_row($resvisite);
?>
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Conducteur</th>
<th>Carburant</th>
<th>kilometrage</th>
<th>Date de consommation</th></tr>
<?php
$km=0;
$car=0;
while($ligne=mysql_fetch_row($resmiss))
{// for ($j = 0; $j < count($row); $j++) {
?>
<tr >
<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $ligne[1]." ".$ligne[2]?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $ligne[4]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $ligne[3];?> </td>

<td align="center" style="border-top:none; border-bottom:none; border-right:none"> <?php echo $ligne[5]; ?></td></tr>


<?php
$km+=$ligne[3];
$car+=$ligne[4];
}
?>
<tr> <td align="center"><strong>Totale</strong></td>
<td><strong><?php  echo $car?></strong></td><td><strong><?php echo $km ?></strong></td>
<td></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $i?> Missions </span>
</center>
<br /><br /><br /><center>
Reparation et cout de reparation du vehicule <?php echo $mat?> pour l'année <?php echo $annee?></h1></center><br /><br />
<table align='center' border='1' cellpadding="5" width="80%" >
<tr><th>Vehicule</th>
<th>Cout reparation</th>
<th>Date de reparation</th>
</tr>
<?php
$cout=0;
$rep=mysql_num_rows($resrep);
while($ligne=mysql_fetch_row($resrep))
{
?>


<tr >


<td align="center" style="border-top:none; border-bottom:none; border-right:none; border-left:none;"><?php echo $ligne[0];?></td>
 <td align="center" style="border-top:none; border-bottom:none; border-right:none;"> <?php echo $ligne[1]; ?></td>
<td align="center" style="border-top:none; border-bottom:none; border-right:none;"><?php echo $ligne[2];?> </td>




<?php
$cout+=$ligne[1];
}
?>
<tr> <td align="center"><strong>Totale</strong></td>
<td><strong><?php  echo $cout?></strong></td>
<td></td></tr>
</table><br />
<center>
  <span class="Style1"><?php echo $rep?> Reparations </span>
</center>

<?php
/*$reqrep="select r.cout_rep, r.date_fin from vehicule v, reparation r where v.Matricule=r.Matricule and MONTH(r.date_fin)='$mois' and year(r.date_fin)='$annee' and v.Matricule='$mat' order by r.date_fin";
$resrep=mysql_query($reqrep) or die(mysql_error());
$rep=mysql_num_rows($resrep);
$nbrep=*/
}
?>
<!--/*
else if(!empty($mois))
{
$req="select v.Matricule, c.nom, c.prenom, Qte_carburant, m.Km_parcourir, m.Date_fin from vehicule v, mission m, conducteur c where v.Matricule=m.Matricule and c.id_conducteur=m.id_conducteur and month(m.Date_fin)='$mois' and year(m.Date_fin)='$annee' and v.Matricule='$mat' order by m.Date_fin";
$resmiss=mysql_query($req)or die(mysql_error());
$i=mysql_num_rows($resmiss);
$rep=0;
//$Mat = mysql_result($resmiss, 0);
//$vehicule=$ligne[0];
ob_start();
$pdf = new FPDF();
$pdf->AddPage();
//$pdf->SetFont('Arial','',15);
$pdf->SetFont('Helvetica','',11);
$pdf->Text(40,10,'kilometrage et Consomation carburant du vehicule '.$mat." pour mois $mois de l'anneé $annee");
$position_entete = 28;

function entete_table($position_entete){
    global $pdf;
    $pdf->SetDrawColor(183); // Couleur du fond
    $pdf->SetFillColor(221); // Couleur des filets
   $pdf->SetTextColor(0); // Couleur du texte
    $pdf->SetY($position_entete);
    $pdf->SetX(8);
    $pdf->Cell(50,8,'Conducteur',1,0,'L',1);
	 $pdf->SetX(40); // 8 + 96
    $pdf->Cell(50,8,'carburant',1,0,'L',1);
    $pdf->SetX(60); // 8 + 96
    $pdf->Cell(50,8,'Kilométrage',1,0,'L',1);
    $pdf->SetX(90); // 104 + 10
    $pdf->Cell(50,8,'Date consommation',1,0,'L',1);
	
    $pdf->Ln(); // Retour à la ligne
}

//---------------------------------------------------------------------//
$km=0;
$car=0;
$nbrep=0;

//$rep=mysql_num_rows($resrep);
entete_table($position_entete); $position_detail = 36;
$pdf->SetFont('Arial','',8);
$pos2=0;
while($ligne=mysql_fetch_row($resmiss))
{
	 // Retour à la ligne
	$vehicule=$ligne[0];
	 $pdf->SetY($position_detail);
    $pdf->SetX(8);
    $pdf->MultiCell(50,8,utf8_decode($ligne[1])." ".utf8_decode($ligne[2]),'L',1);
	$pdf->SetY($position_detail);
    $pdf->SetX(40);
    $pdf->MultiCell(50,8,$ligne[3],'L',1);
   $pdf->SetY($position_detail);
    $pdf->SetX(60);
    $pdf->MultiCell(50,8,$ligne[4],'L',1);
    $pdf->SetY($position_detail);
    $pdf->SetX(90);
    $pdf->MultiCell(50,8,$ligne[5],'L',1);
	
	$position_detail += 10;
	$pdf->Ln();
	$km+=$ligne[4];
	$car+=$ligne[5];
//	$i++;
   }

   $pdf->SetFont('Arial','B',9);
   	 $pdf->SetY($position_detail);
   $pdf->SetX(8);
    $pdf->MultiCell(50,8,'Total','L',1);
   $pdf->SetY($position_detail);
    $pdf->SetX(40);
	$pdf->MultiCell(50,8,$car,'L',1);
	 $pdf->SetY($position_detail);
    $pdf->SetX(60);
	    $pdf->MultiCell(50,8,$km,'L',1);
  
	$pdf->line(8, $position_detail, 130, $position_detail);
	
   function entete_table2($position_entete){
    global $pdf;
    $pdf->SetDrawColor(183); // Couleur du fond
    $pdf->SetFillColor(221); // Couleur des filets
   $pdf->SetTextColor(0); // Couleur du texte
    $pdf->SetY($position_entete);
    $pdf->SetX(8);
    $pdf->Cell(50,8,'Cout reparation',1,0,'L',1);
	 $pdf->SetX(40); // 8 + 96
    $pdf->Cell(50,8,'Date reparation',1,0,'L',1);
 
    $pdf->Ln(); // Retour à la ligne
}

//---------------------------------------------------------------------//

$nbrep=0;
$somcout=0;
$pdf->Text(40,$position_detail+20,'Reparation du vehicule '.$mat." pour mois $mois de l'anneé $annee");
$reqrep="select r.cout_rep, r.date_fin from vehicule v, reparation r where v.Matricule=r.Matricule and MONTH(r.date_fin)='$mois' and year(r.date_fin)='$annee' and v.Matricule='$mat' order by r.date_fin";
$resrep=mysql_query($reqrep) or die(mysql_error());
$rep=mysql_num_rows($resrep);
$position_detail+=40;
$position_entete = $position_detail-8;
entete_table2($position_entete); //$position_detail = 36;
$pdf->SetFont('Arial','',8);
$pos2=0;
while($line=mysql_fetch_row($resrep))
{
	 // Retour à la ligne
	
	 $pdf->SetY($position_detail);
    $pdf->SetX(8);
    $pdf->MultiCell(50,8,$line[0],'L',1);
	$pdf->SetY($position_detail);
    $pdf->SetX(40);
    $pdf->MultiCell(50,8,$line[1],'L',1);
	$nbrep+=1;
	$somcout+=$line[0];
	$position_detail += 10;
	$pdf->Ln();
	
//	$i++;
   }

   $pdf->SetFont('Arial','B',9);
   	 $pdf->SetY($position_detail);
   $pdf->SetX(8);
    $pdf->MultiCell(50,8,'Total','L',1);
   $pdf->SetY($position_detail);
    $pdf->SetX(40);
	$pdf->MultiCell(50,8,$somcout,'L',1);
	 $pdf->SetY($position_detail);
   /* $pdf->SetX(60);
	    $pdf->MultiCell(50,8,'total','L',1);
  
   $pdf->Output("$mat.pdf","I");
ob_end_flush(); 

}*/
-->
<div align="right">
<input name="imprimer" onClick="imprimer()" type="button" value="Imprimer"></div>
</body>
</html>
