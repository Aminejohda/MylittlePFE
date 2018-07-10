<?php session_start();
$login= $_POST['login'];
$pwd= $_POST['pwd'];
if($login=='' || $pwd==''){
echo"<script language='javascript'>alert('veuillez remplir tous les champs'),parent.location.href='../index.php'</script>";
}

else
{
include("../model/config.php");
$sql=$db->query("select COUNT(*) from admin where email_admin='$login' and pwd='$pwd'")->fetch();
if($sql['COUNT(*)']!=0){
$sql1=$db->query("select * from admin where email_admin='$login' and pwd='$pwd'")->fetch();
$id=$sql1['id_admin'];
$_SESSION['admin']=$id;
header('Location: ../Dash.php');

}
if ($sql['COUNT(*)']==0){
echo"<script language='javascript'>alert('vos parametre sont incorrectes'),parent.location.href='../index.php'</script>";
}}
?>