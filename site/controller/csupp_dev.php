<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$id_dev=$_GET['id_dev'];
include("../model/mdevis.php");
$i= new devis();
$i->supp_devis($id_dev);
if (isset($_SESSION['client'])) {
	echo "<script language='javascript'>parent.location.href='../devis_client.php'</script>";
}
if (isset($_SESSION['entreprise'])) {
	echo "<script language='javascript'>parent.location.href='../devis_ent2.php'</script>";
}

?>