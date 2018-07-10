<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];

include("../model/mclients.php");
$i= new Clients();
$i->supp_Client($id);
echo "<script language='javascript'>parent.location.href='../clients.php'</script>";


?>