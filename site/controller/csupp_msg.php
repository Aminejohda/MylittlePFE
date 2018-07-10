<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id_msg=$_GET['id_msg'];
include("../model/mmessage.php");
$i= new Message();
$i->supp_msg($id_msg);
echo "<script language='javascript'>parent.location.href='../message_ent.php'</script>";
?>