<?php
session_start();
$email=$_GET['email'];

include("../model/mclient.php");
$i= new Client();
$i->email=$email;
$i->modif_Conf_Cli($i);
echo "<script language='javascript'>parent.location.href='../tableau_bord_cli.php'</script>";


?>