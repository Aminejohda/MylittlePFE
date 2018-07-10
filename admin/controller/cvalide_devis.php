<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];

include("../model/mdevis.php");
$i= new Devis();
$i->approuver_devis($id);
echo "<script language='javascript'>parent.location.href='../devis.php'</script>";
?>