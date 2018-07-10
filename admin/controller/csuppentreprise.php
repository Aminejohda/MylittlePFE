<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];

include("../model/mentreprise.php");
$i= new Entreprise();
$i->supp_Entreprise($id);
echo "<script language='javascript'>parent.location.href='../entreprises.php'</script>";


?>