<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$id=$_SESSION['entreprise'];
$nom_ste=$_POST['nom_ste'];
$adr=$_POST['adr'];
$site=$_POST['site'];
$des=$_POST['des'];
$mp = implode(',', $_POST['mp']);
$rd=$_POST['rd'];
$tel=$_POST['tel'];
$fax=$_POST['fax'];
$gsm=$_POST['gsm'];
$long=$_POST['long'];
$lat=$_POST['lat'];
#$date_au = date('Y-m-d'); 
include("../model/mentreprise.php");
$i= new Entreprise();
$i->nom_ste=$nom_ste;
$i->adr=$adr;
$i->site=$site;
$i->id=$id;
$i->des=$des;
$i->mp=$mp;
$i->rd=$rd;
$i->tel=$tel;
$i->fax=$fax;
$i->gsm=$gsm;
$i->long=$long;
$i->lat=$lat;
#$i->date=$date_au;
$i->modif_Profil2_Ent($i);
echo "<script language='javascript'>alert('Modification Avec Succès'),parent.location.href='../tableau_bord_ent.php'</script>";
?>