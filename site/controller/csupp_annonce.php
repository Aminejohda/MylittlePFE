<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];
include("../model/mannonce.php");
$i= new Annonce();
$i->supp_annonce($id);
echo "<script language='javascript'>parent.location.href='../annonce.php'</script>";
?>