<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$url ="https://www.google.com/recaptcha/api/siteverify";
$privatekey ="6LcN_hwTAAAAAGugIKQEddiMNLCy5XJVIH-eU-Ny";
$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip".$_SERVER['REMOTE_ADDR']);
$data =  json_decode($response);
if (isset($data->success) AND $data->success==true) {
	include("../model/config.php");
 $sql="select id_entreprise from entreprise";
        $res=$db->prepare($sql);
        $res->execute();
        $donne=$res->fetchAll();
        $int="";
        for ($i=0; $i <count($donne) ; $i++) { 
        $str = $donne[$i]['id_entreprise'].'<br>';
       

 $int = $int . filter_var($str, FILTER_SANITIZE_NUMBER_INT).' ';


    }  
    $pieces = explode(" ", $int);
   
    $id_en= E.(max($pieces)+1);
     
$cat=$_POST['cat'];
$ns=$_POST['ns'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$pwd1=$_POST['pwd1'];
if($pwd1!=$pwd){

	echo"<script language='javascript'>alert('confirmation mot de passe incorrecte'),parent.location.href='../index.php'</script>";	
		die();
}
include("../model/config.php");
include("../model/mentreprise.php");
$i= new Entreprise();
$i->cat=$cat;
$i->ns=$ns;
$i->email=$email;
$i->pwd=$pwd;
$i->id_en=$id_en;
$sql=$db->query("select COUNT(*) from entreprise where email ='$email'")->fetch();
if ($sql['COUNT(*)']==0){
$i->Ajouter_Entreprise($i);

 
// Subject
$subject = 'Sa3edni.tn - Confirmation Email'; 
// Message
$msg = "

Salut $ns ,<br/>

Votre compte d'utilisateur avec l'adresse e -mail $email a été créé.<br/>

S'il vous plaît suivez le lien ci-dessous pour activer votre compte.<br/>
<a href='http://localhost/pfetest/site/controller/conf_ent.php?email=$email'>Cliquez ici</a><br/>

Vous serez en mesure de modifier vos paramètres (mot de passe ,adresse , etc. ) une fois que votre compte est activé .<br/>



Si vous ne l'avez pas demandé la création d' un compte Sa3edni.tn ou si vous pensez que cela est une utilisation non autorisée de votre adresse e -mail , s'il vous plaît envoyer cet e -mail à <bold>sa3edni.tn@gmail.com</bold> .<br/>
Merci   
"; 
// Headers
$headers = 'From: Sa3edni.tn <mail@server.com>'."\r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 
// Function mail()
mail($email, $subject, $msg, $headers);
echo"<script language='javascript'>parent.location.href='../creation.php?email=$email'</script>";
}
else {
	echo"<script language='javascript'>alert('compte deja existe'),parent.location.href='../index.php'</script>";
	die();
}	

	}else{
		echo"<script language='javascript'>alert('ROBOT'),parent.location.href='../index.php'</script>";
}
?>