<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(0);
include("../model/config.php");
 $sql="select id_client from client";
        $res=$db->prepare($sql);
        $res->execute();
        $donne=$res->fetchAll();
        $int="";
        for ($i=0; $i <count($donne) ; $i++) { 
        $str = $donne[$i]['id_client'].'<br>';
       

 $int = $int . filter_var($str, FILTER_SANITIZE_NUMBER_INT).' ';


    }  
    $pieces = explode(" ", $int);
   
    $id_cl= C.(max($pieces)+1);
     


     
$nom=$_POST['nom'];
$pren=$_POST['pren'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];


include("../model/mclient.php");
$i= new Client();

$i->nom=$nom;
$i->pren=$pren;
$i->email=$email;
$i->pwd=$pwd;
$i->id_cl=$id_cl;
$sql=$db->query("select COUNT(*) from entreprise where email = '$email' ")->fetch();

if ($sql['COUNT(*)']!=0){
echo"<script language='javascript'>alert('Vous etes un prestataire'),parent.location.href='../index.php'</script>";
	die();
}


$sql=$db->query("select COUNT(*) from client where email ='$email'")->fetch();
if ($sql['COUNT(*)']==0){
$i->Ajouter_Client($i);}
else {
	echo"<script language='javascript'>alert('compte deja existe'),parent.location.href='../index.php'</script>";
	die();
}

$subject = 'Sa3edni.tn - Confirmation Email'; 
// Message
$msg = "

Salut ,<br/>

Votre compte d'utilisateur avec l'adresse e -mail $email a été créé.<br/>

S'il vous plaît suivez le lien ci-dessous pour activer votre compte.<br/>
<a href='http://localhost/pfetest/site/controller/conf_client.php?email=$email'>Cliquez ici</a><br/>

Vous serez en mesure de modifier vos paramètres (mot de passe ,adresse , etc. ) une fois que votre compte est activé .<br/>



Si vous ne l'avez pas demandé la création d' un compte Sa3edni.tn ou si vous pensez que cela est une utilisation non autorisée de votre adresse e -mail , s'il vous plaît envoyer cet e -mail à <bold>sa3edni.tn@gmail.com</bold> .<br/>
Merci   
"; 



$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

mail($email, $subject, $message, $headers);
echo"<script language='javascript'>parent.location.href='../creation.php?email=$email'</script>";
	




?>