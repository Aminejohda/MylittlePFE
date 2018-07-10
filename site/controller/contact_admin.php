<?php
error_reporting(0);
$nom=$_POST['nom'];
$msg=$_POST['msg'];
$email=$_POST['email'];
$obj=$_POST['obj'];
$dates=date('Y-m-d');
include("../model/mmessage.php");
$i= new Message();
$i->nom=$nom;
$i->msg=$msg;
$i->email=$email;
$i->obj=$obj;
$i->dates=$dates;
$i->contact_admin($i);
$to = 'medaminemhiri.95@gmail.com';
$subject = "ton sujet";
$message="
Nom: $nom <br>
Adresse émail: $email<br>	
Objet: $obj<br>

Message :$msg <br>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

mail($to, $subject, $message, $headers);
echo "<script language='javascript'>parent.location.href='../index.php'</script>";
?>