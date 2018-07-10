<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
if (isset($_SESSION['client'])) {
$id_cli=$_SESSION['client'];
$id_an=$_POST['id_an'];
$id_ent = $_GET['id'] ;
$objet=$_POST['objet'];
$msg=$_POST['msg'];
$date_auj =date("Y-m-d h:i:sa");
include("../model/mmessage.php");
$i= new Message();
$i->objet=$objet;
$i->msg=$msg;
$i->id_cli=$id_cli;
$i->id_ent=$id_ent;
$i->date_auj=$date_auj;
$i->Ajouter_msg($i);
echo "<script language='javascript'>alert('Ajouter Avec Succès'),parent.location.href='../message_client.php'</script>";
} else {
	$id_cli=$_SESSION['entreprise'];
$id_an=$_POST['id_an'];
$id_ent = $_GET['id'] ;
$objet=$_POST['objet'];
$msg=$_POST['msg'];
$date_auj =date("Y-m-d h:i:sa");
include("../model/mmessage.php");
$i= new Message();
$i->objet=$objet;
$i->msg=$msg;
$i->id_cli=$id_cli;
$i->id_ent=$id_ent;
$i->date_auj=$date_auj;
$i->Ajouter_msg($i);
echo "<script language='javascript'>alert('Ajouter Avec Succès'),parent.location.href='../message_ent.php'</script>";
}
?>