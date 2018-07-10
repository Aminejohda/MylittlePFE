<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];
$rep=$_POST['rep'];
include("../model/mmessage_client.php");
$i= new Message();
$i->rep=$rep;
$i->id=$id;
$i->Repondre($i);
echo "<script language='javascript'>alert('Message est envoyée Avec Succès'),parent.location.href='../message_client.php'</script>";
?>	