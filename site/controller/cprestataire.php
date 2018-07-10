<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$id_cli=$_SESSION['client'];
include("../model/config.php");
 $sql="select * from client where id_client = :id";
        $res=$db->prepare($sql);
        $res->execute(array(':id'=>$id_cli));
        $donne=$res->fetch($db::FETCH_ASSOC);
	$nom = $donne['nom'];
	$prenom = $donne['prenom'];
	$email = $donne['email'];
	$password = $donne['password'];
	$conf = $donne['conf'];
	$image = $donne['image'];
	$civilite = $donne['civilite'];
	$adresse = $donne['adresse'];
	$telephone = $donne['telephone'];
	$lat = $donne['lat'];
	$lon = $donne['lon'];
	$dernier_cnx = $donne['dernier_cnx'];
	$gsm = $donne['gsm'];
	  $sql1="select id_entreprise from entreprise";
        $res1=$db->prepare($sql1);
        $res1->execute();
        $donne1=$res1->fetchAll();
        $int="";
        for ($i=0; $i <count($donne1) ; $i++) { 
        $str = $donne1[$i]['id_entreprise'].'<br>';
       

 $int = $int . filter_var($str, FILTER_SANITIZE_NUMBER_INT).' ';


    }  
    $pieces = explode(" ", $int);
   
    echo $id_en= E.(max($pieces)+1);

$sql=$db->prepare("INSERT INTO entreprise set id_entreprise = '$id_en', nom = '$nom', prenom = '$prenom', email = '$email', password = '$password', conf = '$conf', image = '$image', civilite = '$civilite', adresse = '$adresse', telephone = '$telephone', lat = '$lat', lon = '$lon', dernier_cnx = '$dernier_cnx', gsm ='$gsm' ");
$sql->execute();
$sql=$db->prepare("update message set id_emetteur = '$id_en' where id_emetteur = '$id_cli' ");
$sql->execute();
$sql=$db->prepare("update devis set id_em = '$id_en' where id_em = '$id_cli' ");
$sql->execute();
$sql=$db->prepare("update avis set id_em = '$id_en' where id_em = '$id_cli' ");
$sql->execute();

$sql=$db->prepare("INSERT INTO organisme set id_entreprise = '$id_en', nom = '$nom', prenom = '$prenom', email = '$email', password = '$password', conf = '$conf', image = '$image', civilite = '$civilite', adresse = '$adresse', telephone = '$telephone', lat = '$lat', lon = '$lon', dernier_cnx = '$dernier_cnx', gsm ='$gsm' ");
$sql->execute();
echo "<script language='javascript'>parent.location.href='../etape2.php?id_ent=".$id_en."'</script>";



