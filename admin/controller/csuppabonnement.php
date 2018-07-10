<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];
include("../model/mabonnement.php");
$i= new Abonnement();
$i->supp_ab($id);
echo "<script language='javascript'>parent.location.href='../abonnement.php'</script>";
?>