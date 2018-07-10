<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id_dev=$_GET['id_dev'];
$rep=$_POST['rep'];
$id_ent=$_POST['id_ent'];
include("../model/mdevis.php");
$i= new Devis();
$i->rep=$rep;
$i->id_dev=$id_dev;
$i->id_ent=$id_ent;
$i->Repondre_devis($i);
echo "<script language='javascript'>alert('Message est envoyée Avec Succès'),parent.location.href='../voir_devis_ent.php?id_dev=".$id_dev."'</script>";
?>	