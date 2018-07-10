<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();

$id=$_GET['id'];
include("../model/mavis.php");
$i= new Avis();
$i->supp_avis($id);
if (isset($_SESSION['client'])) {
	echo "<script language='javascript'>parent.location.href='../avis_client.php'</script>";
}
if (isset($_SESSION['entreprise'])) {
	echo "<script language='javascript'>parent.location.href='../avis_ent.php'</script>";
}

?>