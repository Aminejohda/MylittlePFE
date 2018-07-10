<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(0);
$email=$_POST['email'];

include("../model/madmin.php");
$i= new Admin();

$res=$i->Affscbyemail($email);
$mp = $res['pwd'];

// Subject
$subject = 'Sa3edni.tn - recuperation email'; 
// Message
$msg = "

Salut admin ,<br/>

Votre Mot de passe est : <bold>$mp</bold> <br/>

Si vous ne l'avez pas demandé la recuperation d' un compte  ou si vous pensez que cela est une utilisation non autorisée de votre adresse e -mail , s'il vous plaît envoyer cet e -mail à <bold>sa3edni.tn@gmail.com</bold> .<br/>
Merci   
"; 
// Headers
$headers = 'From: Sa3edni.tn <mail@server.com>'."\r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 
// Function mail()
mail($email, $subject, $msg, $headers);
echo"<script language='javascript'>alert('Mot de passe envoyer Avec Succès Vérifier Votre Boite mail'),parent.location.href='../index.php'</script>";
?>