<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(0);
$email=$_POST['email'];
$des=$_POST['des'];

$to='medaminemhiri.95@gmail.com';

// Subject
$subject = 'Sa3edni.tn - feed'; 
// Message
$msg = "

Salut admin ,<br/>

Depuis : $email <br>
msg : $des <br>
"; 
// Headers
$headers = 'From: Sa3edni.tn <mail@server.com>'."\r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 
// Function mail()
mail($email, $subject, $msg, $headers);
echo"<script language='javascript'>alert('Message envoyer Avec Succès Vérifier '),parent.location.href='../dash.php'</script>";
?>