<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];
include("../model/mcategorie.php");
$i= new Categorie();
$i->supp_categorie($id);
echo "<script language='javascript'>parent.location.href='../categorie.php'</script>";
?>