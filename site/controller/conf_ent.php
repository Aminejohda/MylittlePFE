<?php
session_start();
$email=$_GET['email'];

include("../model/mentreprise.php");
$i= new Entreprise();
$i->email=$email;
$i->modif_Conf_Ent($i);
include("../model/config.php");
$sql=$db->query("select * from entreprise where email = '$email' ")->fetch();
$id=$sql['id_entreprise'];
$_SESSION['entreprise']=$id;
echo "<script language='javascript'>parent.location.href='../tableau_bord_ent.php'</script>";


?>