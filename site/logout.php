<?php
session_start();
include("model/config.php");
if (isset($_SESSION['client'])) {
	
$id= $_SESSION['client'];
$date_au= date('Y-m-d');
$sql=$db->prepare('UPDATE client set  dernier_cnx = :date_au WHERE id_client = :id');
$sql->bindParam(':date_au',$date_au);
$sql->bindParam(':id',$id);
$sql->execute();
}
if (isset($_SESSION['entreprise'])) {
	
$id= $_SESSION['entreprise'];
$date_au= date('Y-m-d');
$sql=$db->prepare('UPDATE entreprise set  dernier_cnx = :date_au WHERE id_entreprise = :id');
$sql->bindParam(':date_au',$date_au);
$sql->bindParam(':id',$id);
$sql->execute();
}

$_SESSION = array();
session_destroy();
header('Location:index.php');
?>