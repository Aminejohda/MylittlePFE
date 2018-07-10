<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
if (isset($_SESSION['client'])) {
	
$id_ann=$_POST['id_an'];
$id_em=$_SESSION['client'];
$id_rec = $_GET['id'] ;
$msg=$_POST['msg'];
$date_auj =date("Y-m-d h:i:sa");
include("../model/mavis.php");
$i= new Avis();
$i->msg=$msg;
$i->id_em=$id_em;
$i->id_ann=$id_ann;
$i->id_rec=$id_rec;
$i->date_auj=$date_auj;
$i->Ajouter_avis($i);
echo "<script language='javascript'>alert('Ajouter Avec Succès'),parent.location.href='../profil.php?id=".$id_ann."'</script>";
}
else {
	$id_ann=$_POST['id_an'];
$id_em=$_SESSION['entreprise'];
$id_rec = $_GET['id'] ;
$msg=$_POST['msg'];
$date_auj =date("Y-m-d h:i:sa");
include("../model/mavis.php");
$i= new Avis();
$i->id_ann=$id_ann;
$i->msg=$msg;
$i->id_em=$id_em;
$i->id_rec=$id_rec;
$i->date_auj=$date_auj;
$i->Ajouter_avis($i);
echo "<script language='javascript'>alert('Ajouter Avec Succès'),parent.location.href='../profil.php?id=".$id_ann."'</script>";
}
?>