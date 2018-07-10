<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];
$rep=$_POST['rep'];
include("../model/mmessage.php");
$i= new Message();
$i->rep=$rep;
$i->id=$id;
$i->repondre($i);
echo "<script language='javascript'>alert('message est envoyée Avec Succès'),parent.location.href='../message_ent.php'</script>";
?>	