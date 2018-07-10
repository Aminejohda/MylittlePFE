<script src='../public/js/sweetalert.min.js'></script>
<link href='../public/css/sweetalert.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
error_reporting(0);
$email=$_GET['email'];
$rep =$_POST['rep'];
$suj =$_POST['suj'];
$id =$_POST['id'];
$to = $email;
 include("../model/mboite_Rec.php");
$i= new Boite_Rec();

$i->rep=$rep;
$i->id=$id;
$i->ajout_rep($i);

$subject = $suj;
$message="<html><head></head><body>$rep</body></html>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
mail($to, $subject, $message, $headers);
?>

<p></p>
<script language='javascript'> swal({//sweetalert
      title: "Bon Travail!", 
      text: "Votre message a été envoyer avec succès" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../contactus.php';
    });</script>


