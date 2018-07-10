<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];

include("../model/mboite_rec.php");
$i= new Boite_Rec();
$i->supp_email($id);
echo "<script language='javascript'>parent.location.href='../contactus.php'</script>";


?>